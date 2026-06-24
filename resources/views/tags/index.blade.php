@extends('layouts.app')

@section('content')

<h2>Tags</h2>

<a href="{{ route('tags.create') }}">
    Create Tag
</a>

<br><br>

@foreach($tags as $tag)

<div class="card">

    <h3>{{ $tag->name }}</h3>

    <p>
        Color:
        <span style="color:{{ $tag->color }}">
            {{ $tag->color }}
        </span>
    </p> 
    <a href="{{ route('tags.edit', $tag->id) }}">
        Edit
    </a> | 

    <form action="{{ route('tags.destroy', $tag->id) }}"
          method="POST"
          style="display:inline">

        @csrf
        @method('DELETE')

        <button type="submit">
            Delete
        </button>

    </form>

</div>

@endforeach

@endsection