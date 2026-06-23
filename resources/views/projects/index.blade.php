@extends('layouts.app')

@section('content')

<h2>Projects</h2>

<a href="{{ route('projects.create') }}">Create Project</a>

<hr>

@foreach($projects as $project)

    <h3>{{ $project->name }}</h3>

    <p>{{ $project->description }}</p>

    <a href="{{ route('projects.edit', $project->id) }}">
        Edit
    </a>

    <form action="{{ route('projects.destroy', $project->id) }}"
          method="POST"
          style="display:inline">
        @csrf
        @method('DELETE')

        <button type="submit">
            Delete
        </button>
    </form>

    <hr>

@endforeach
@endsection