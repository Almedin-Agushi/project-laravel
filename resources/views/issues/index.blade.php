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

    <h3>{{ $issue->title }}</h3>

    <p>{{ $issue->description }}</p>

    <p>Status: {{ $issue->status }}</p>

    <p>Priority: {{ $issue->priority }}</p>

    <p>Project: {{ $issue->project->name ?? 'No Project' }}</p>

    <a href="{{ route('issues.edit', $issue->id) }}">
        Edit
    </a>

    <form action="{{ route('issues.destroy', $issue->id) }}"
          method="POST"
          style="display:inline">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>  <br>  <br>
 <a href="{{ route('issues.show', $issue->id) }}">
    View
</a>
    <hr>

   

@endforeach

@endsection