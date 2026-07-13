<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DynamicProject; 

class ProjectController extends Controller
{
    public function projects()
    {
        return view('projects.index');
    }

    public function domestic()
    {
        return view('projects.domestic');
    }

    public function commercial()
    {
        return view('projects.commercial');
    }

    public function interior()
    {
        return view('projects.interior');
    }

    public function industrial()
    {
        return view('projects.industrial');
    }

       
public function architectural()
{
    $dynamicProjects = DynamicProject::where('page_type', 'architectural')
                        ->latest()
                        ->get();

    return view('projects.architectural', compact('dynamicProjects'));
}

    public function architectural_one()
    {
        
        $dynamicProjects = DynamicProject::where('page_type', 'architectural_1')
                            ->latest()
                            ->get();

        return view('projects.architectural_1', compact('dynamicProjects'));
    }

    public function architectural_more()
{
    
    $dynamicProjects = DynamicProject::where('page_type', 'architectural_2')
                        ->latest()
                        ->get();

    return view('projects.architectural_2', compact('dynamicProjects'));
}

    public function coatings()
    {
        return view('projects.coatings');
    }   
    
    
}   