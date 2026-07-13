<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DynamicProject;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminDashboardController extends Controller
{
    public function index() {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please log in first.');
        }

        $projects = DynamicProject::latest()->get();
        return view('admin.dashboard', compact('projects'));
    }

    public function store(Request $request) {
        if (!Session::get('admin_logged_in')) {
            return response()->json(['error' => 'Unauthorized.'], 401);
        }

        $validator = Validator::make($request->all(), [
            'location'     => 'required|string',
            'heading'      => 'required|string',
            'page_type'    => 'required|string',
            'image_folder' => 'required|string',
            'image_prefix' => 'required|string',
            'images'       => 'nullable|array|max:4', 
            'images.*'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:12288'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        
        $projectId = $request->project_id;
        if (empty($projectId)) {
            $projectId = 'PROJ_' . uniqid() . '_' . rand(100, 999);
        }

        $project = DynamicProject::where('project_id', $projectId)->first();
        
        $uploadedImages = [];
        if ($project && $project->images) {
            $uploadedImages = is_array($project->images) ? $project->images : json_decode($project->images, true);
        }

       
        if ($request->hasFile('images')) {
            $cleanFolder = trim($request->image_folder, '/');
            $destinationPath = public_path($cleanFolder);

            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

            foreach ($request->file('images') as $index => $image) {
                $customIndex = count($uploadedImages) + 1;
                $extension = $image->getClientOriginalExtension();
                
                $imageName = $request->image_prefix . '_' . $customIndex . '.' . $extension;
                $image->move($destinationPath, $imageName);
                
                $uploadedImages[] = $cleanFolder . '/' . $imageName;
            }
        }

        $updatedProject = DynamicProject::updateOrCreate(
            ['project_id' => $projectId],
            [
                'location'        => $request->location,
                'heading'         => $request->heading,
                'description_1'   => $request->description_1,
                'description_2'   => $request->description_2,
                'page_type'       => $request->page_type,
                'image_folder'    => $request->image_folder,
                'image_prefix'    => $request->image_prefix,
                'autoplay_speed'  => $request->autoplay_speed ?? 6000,
                'images'          => json_encode($uploadedImages)
            ]
        );

        return response()->json(['success' => true]);
    }

    public function destroy($id) {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

       
        $project = DynamicProject::findOrFail($id);
        $images = json_decode($project->images, true);

        if (is_array($images)) {
            foreach ($images as $img) {
                if (file_exists(public_path($img))) {
                    @unlink(public_path($img));
                }
            }
        }
        $project->delete();
        return back()->with('success', 'Project deleted successfully.');
    }
}