<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $skills = Skill::where('is_active', true)->orderBy('order')->get();
        $projects = Project::where('is_active', true)->orderBy('order')->get();
        $experiences = Experience::orderBy('order')->get();
        $educations = Education::orderBy('order')->get();
        
        return view('home', compact('about', 'skills', 'projects', 'experiences', 'educations'));
    }
}
