@extends('layouts.app')

@section('content')

<h2>Projects</h2>

<p>
    <a href="{{ route('projects.create') }}">
        Create Project
    </a>
</p>

@foreach($projects as $project)

<div class="card">

    <h3>{{ $project->name }}</h3>

    <p>{{ $project->description }}</p>

    @if($project->start_date)
        <p>
            <strong>Start Date:</strong>
            {{ $project->start_date }}
        </p>
    @endif

    @if($project->deadline)
        <p>
            <strong>End Date:</strong>
            {{ $project->deadline }}
        </p>
    @endif

    <div style="margin-top:15px;">

        <a href="{{ route('projects.edit', $project->id) }}">
            Edit
        </a>

        <form action="{{ route('projects.destroy', $project->id) }}"
              method="POST"
              style="display:inline;">
            @csrf
            @method('DELETE')

            <button type="submit">
                Delete
            </button>
        </form>

    </div>

</div>

@endforeach

@endsection