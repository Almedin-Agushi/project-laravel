@extends('layouts.app')

@section('content')

<h2>Tags</h2>

<a href="{{ route('tags.create') }}">Create Tag</a>

<hr>

@foreach($tags as $tag)

    <p>{{ $tag->name }} - {{ $tag->color }}</p>
    


    <a href="{{ route('tags.edit', $tag->id) }}">
        Edit
    </a>

    <form action="{{ route('tags.destroy', $tag->id) }}"
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