@extends('layouts.app')

@section('content')

<h2>Issues</h2>

<form method="GET">
    <input type="text"
           name="search"
           placeholder="Search issue..."
           value="{{ request('search') }}">

    <button type="submit">Search</button>
</form>

<br>

@foreach($issues as $issue)

    <div class="card">
        
        <h3>{{ $issue->title }}</h3>

        <p>{{ $issue->description }}</p>

        <p>
            <strong>Project:</strong>
            {{ $issue->project->name ?? 'No Project' }}
        </p>

        <p>
            <strong>Priority:</strong>
            {{ ucfirst($issue->priority) }}
        </p>

        <p>
            <strong>Due Date:</strong>
            {{ $issue->due_date }}
        </p>
        <p>
        <strong>Tags:</strong>

        @foreach($issue->tags as $tag)
            <span class="tag-badge">
                {{ $tag->name }}
            </span>
    @endforeach
</p>


    <br>

    <a href="{{ route('issues.show', $issue->id) }}">View</a> |
    <a href="{{ route('issues.edit', $issue->id) }}">Edit</a>

    <form action="{{ route('issues.destroy', $issue->id) }}"
          method="POST"
          style="display:inline">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>

</div>

@endforeach

@endsection