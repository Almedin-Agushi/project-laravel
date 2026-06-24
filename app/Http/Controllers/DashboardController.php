<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Issue;
use App\Models\Tag;
use App\Models\Comment;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'projects' => Project::count(),
            'issues' => Issue::count(),
            'tags' => Tag::count(),
            'comments' => Comment::count(),
        ]);
    }
}