<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Issue $issue)
    {
        $request->validate([
            'content' => 'required'
        ]);

        $issue->comments()->create([
            'content' => $request->content
        ]);

        return back();
    }
}