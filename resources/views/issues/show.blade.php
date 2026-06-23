@extends('layouts.app')

@section('content')

<h2>{{ $issue->title }}</h2>

<p>{{ $issue->description }}</p>

<h3>Current Tags</h3>

@foreach($issue->tags as $tag)
    <p>{{ $tag->name }} - {{ $tag->color }}</p>
@endforeach

<hr>

<form action="{{ route('issues.attachTag', $issue->id) }}" method="POST">
    @csrf

    <select name="tag_id">
        @foreach($tags as $tag)
            <option value="{{ $tag->id }}">
                {{ $tag->name }} 
            </option>
        @endforeach
    </select>

    <button type="submit">
        Attach Tag
    </button>
</form>

<hr>

<h3>Comments</h3>

@foreach($issue->comments as $comment)
    <p>{{ $comment->content }}</p>
@endforeach

<form action="{{ route('comments.store', $issue->id) }}"
      method="POST">

    @csrf

    <textarea name="content"></textarea>

    <br><br>

    <button type="submit">
        Add Comment
    </button>

</form>


@endsection