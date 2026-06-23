@extends('layouts.app')

@section('content')

<form action="{{ route('issues.store') }}" method="POST">
    @csrf

    <!-- Project dropdown -->
    <select name="project_id">
        @foreach($projects as $project)
            <option value="{{ $project->id }}">{{ $project->name }}</option>
        @endforeach
    </select>

    <br><br>

    <input type="text" name="title" placeholder="Issue Title">
    <br><br>

    <textarea name="description" placeholder="Description"></textarea>
    <br><br>

    <select name="status">
        <option value="open">Open</option>
        <option value="in_progress">In Progress</option>
        <option value="closed">Closed</option>
    </select>
    <br><br>

    <select name="priority">
        <option value="low">Low</option>
        <option value="medium">Medium</option>
        <option value="high">High</option>
    </select>
    <br><br>

    <input type="date" name="due_date">
    <br><br>

    <button type="submit">Save Issue</button>
</form>




@endsection