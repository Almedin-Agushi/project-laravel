@extends('layouts.app')

@section('content')

<div class="card">

    <h2>Create Issue</h2>

    <form action="{{ route('issues.store') }}" method="POST">
        @csrf

        <label for="project_id">Project</label>
        <select name="project_id" id="project_id">
            @foreach($projects as $project)
                <option value="{{ $project->id }}">
                    {{ $project->name }}
                </option>
            @endforeach
        </select>

        <label for="title">Title</label>
        <input
            type="text"
            id="title"
            name="title"
            placeholder="Issue Title">

        <label for="description">Description</label>
        <textarea
            id="description"
            name="description"
            rows="4"
            placeholder="Issue Description"></textarea>

        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="open">Open</option>
            <option value="in_progress">In Progress</option>
            <option value="closed">Closed</option>
        </select>

        <label for="priority">Priority</label>
        <select name="priority" id="priority">
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select>

        <label for="due_date">Due Date</label>
        <input
            type="date"
            id="due_date"
            name="due_date">

        <button type="submit">
            Save Issue
        </button>

    </form>

</div>

@endsection