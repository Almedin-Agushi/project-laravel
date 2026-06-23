<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Tag;


class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $issues = Issue::with('project')->get();

    return view('issues.index', compact('issues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();

    return view('issues.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
   $validated = $request->validate([
    'project_id' => 'required|exists:projects,id',
    'title' => 'required|string',
    'description' => 'required|string',
    'status' => 'required|string',
    'priority' => 'required|string',
    'due_date' => 'required|date',
]);
Issue::create($validated);

    return redirect()->route('issues.index');
}

    /**
     * Display the specified resource.
     */
    public function show(Issue $issue)
{
    $issue->load('tags');

    $tags = Tag::all();

    return view('issues.show', compact('issue', 'tags'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Issue $issue)
{
    $projects = Project::all();

    return view('issues.edit', compact('issue', 'projects'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Issue $issue)
    {
         $issue->update([
        'project_id' => $request->project_id,
        'title' => $request->title,
        'description' => $request->description,
        'status' => $request->status,
        'priority' => $request->priority,
        'due_date' => $request->due_date,
    ]);

    return redirect()->route('issues.index');
    }


    public function attachTag(Request $request, Issue $issue)
{
    $issue->tags()->syncWithoutDetaching([
        $request->tag_id
    ]);

    return back();
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Issue $issue)
{
    $issue->delete();

    return redirect()->route('issues.index');
}
}
