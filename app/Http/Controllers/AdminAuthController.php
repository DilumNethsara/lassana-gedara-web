<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\DynamicProject;

class AdminAuthController extends Controller
{
    private $allowedEmail = 'info@lassanagedara.lk';

    // ── Auth views ────────────────────────────────────────────────────────────

  
  public function showLogin() {
    return view('admin.login');
}

    public function showOtp()
    {
        return view('admin.otp');
    }

    // ── Dashboard ─────────────────────────────────────────────────────────────

    public function showDashboard()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        $projects = DynamicProject::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('projects'));
    }

    // ── OTP flow ──────────────────────────────────────────────────────────────

    public function sendOtp(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        if (strtolower($request->email) !== strtolower($this->allowedEmail)) {
            return back()->withErrors(['email' => 'Unauthorized Access Attempt. Invalid Admin Mail.']);
        }

        $otp = rand(100000, 999999);
        Admin::updateOrCreate(
            ['email' => $request->email],
            ['otp_code' => $otp, 'otp_expires_at' => now()->addMinutes(10)]
        );

        Session::put('admin_email', $request->email);

        Mail::raw("Your Lassana Gedara Admin Dashboard Verification Code is: $otp", function ($msg) use ($request) {
            $msg->to($request->email)->subject('Admin Login Request OTP');
        });

        return redirect()->route('admin.otp.view')
            ->with('success', 'A temporary access code sent successfully to Mailtrap inbox.');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate(['otp' => 'required|numeric']);
        $email = Session::get('admin_email');

        $admin = Admin::where('email', $email)
            ->where('otp_code', $request->otp)
            ->where('otp_expires_at', '>', now())
            ->first();

        if ($admin) {
            Session::put('admin_logged_in', true);
            $admin->update(['otp_code' => null, 'otp_expires_at' => null]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['otp' => 'The authentication code is incorrect or expired. Try again.']);
    }

    public function logout()
    {
        Session::forget(['admin_logged_in', 'admin_email']);
        return redirect()->route('admin.login');
    }

    // ── Projects API ──────────────────────────────────────────────────────────

    public function listProjects()
    {
        if (!Session::get('admin_logged_in')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $projects = DynamicProject::orderBy('created_at', 'desc')
            ->get()
            ->map(fn($p) => [
                'id'           => $p->project_id,
                'location'     => $p->location       ?? '',
                'heading'      => $p->heading         ?? '',
                'description1' => $p->description_1  ?? '',
                'description2' => $p->description_2  ?? '',
                'page'         => $p->page_type,
                'folder'       => $p->image_folder    ?? '',
                'prefix'       => $p->image_prefix    ?? '',
                'speed'        => $p->autoplay_speed  ?? 6000,
                'images'       => $p->images          ?? [],   // array of filenames
                'imgCount'     => count($p->images ?? []),
                'layout'       => $p->layout          ?? 'left',
                'savedAt'      => $p->created_at->format('Y-m-d'),
            ]);

        return response()->json($projects);
    }


    public function saveProject(Request $request)
    {
        if (!\Illuminate\Support\Facades\Session::get('admin_logged_in')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Validation rules
        $request->validate([
            'location'       => 'required|string',
            'heading'        => 'required|string',
            'page_type'      => 'required|string',
            'image_folder'   => 'required|string',
            'image_prefix'   => 'required|string',
            'images'         => 'nullable|array|max:4',
            'images.*'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:12288' 
        ]);

        
        $projectId = $request->project_id;
        if (empty($projectId)) {
            $projectId = 'PROJ_' . uniqid() . '_' . rand(100, 999);
        }

        $uploadedImages = [];

        if ($request->hasFile('images')) {
            $cleanFolder = trim($request->image_folder, '/');
            $destinationPath = public_path($cleanFolder);

            if (!\Illuminate\Support\Facades\File::exists($destinationPath)) {
                \Illuminate\Support\Facades\File::makeDirectory($destinationPath, 0755, true);
            }

            foreach ($request->file('images') as $index => $image) {
                $customIndex = $index + 1;
                $extension = $image->getClientOriginalExtension();
                
                $imageName = $request->image_prefix . '_' . $customIndex . '.' . $extension;
                $image->move($destinationPath, $imageName);
                
                $uploadedImages[] = $cleanFolder . '/' . $imageName;
            }
        }

        
        $project = \App\Models\DynamicProject::updateOrCreate(
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
                'images'          => !empty($uploadedImages) ? json_encode($uploadedImages) : ($request->images ?? '[]'),
                'layout'          => $request->layout ?? 'left',
            ]
        );

        return response()->json([
            'success' => true,
            'project' => [
                'id'           => $project->project_id,
                'location'     => $project->location,
                'heading'      => $project->heading,
                'description1' => $project->description_1,
                'description2' => $project->description_2,
                'page'         => $project->page_type,
                'folder'       => $project->image_folder,
                'prefix'       => $project->image_prefix,
                'speed'        => $project->autoplay_speed,
                'images'       => is_array($project->images) ? $project->images : json_decode($project->images ?? '[]', true),
                'imgCount'     => is_array($project->images) ? count($project->images) : count(json_decode($project->images ?? '[]', true)),
                'layout'       => $project->layout ?? 'left',
                'savedAt'      => $project->created_at->format('Y-m-d'),
            ],
        ]);
    }

    /**
     * DELETE /admin/projects/{id}
     */
    public function deleteProject(string $id)
    {
        if (!Session::get('admin_logged_in')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        DynamicProject::where('project_id', $id)->delete();

        return response()->json(['success' => true]);
    }
}