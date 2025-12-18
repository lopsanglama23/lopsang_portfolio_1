<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\BlogPost;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'skills' => Skill::count(),
            'projects' => Project::count(),
            'experiences' => Experience::count(),
            'educations' => Education::count(),
            'blog_posts' => BlogPost::count(),
            'unread_contacts' => Contact::where('is_read', false)->count(),
        ];
        
        return view('admin.dashboard', compact('stats'));
    }
}
