@extends('layouts.app')

@section('content')

<div class="card">

    <h2>{{ $issue->title }}</h2>

    <p>{{ $issue->description }}</p>

    <p>
        <strong>Status:</strong>

        @if($issue->status == 'open')
            <span class="badge-open">Open</span>
        @elseif($issue->status == 'in_progress')
            <span class="badge-progress">In Progress</span>
        @else
            <span class="badge-closed">Closed</span>
        @endif
    </p>

    <p>
        <strong>Priority:</strong>
        {{ $issue->priority }}
    </p>

    <p>
        <strong>Due Date:</strong>
        {{ $issue->due_date }}
    </p>

    <h3>Current Tags</h3>

    @foreach($issue->tags as $tag)
        <span style="
            background: {{ strtolower($tag->color) }};
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            margin-right: 5px;
        ">
            {{ $tag->name }}
        </span>
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
        <div class="card">
            {{ $comment->content }}
        </div>
    @endforeach

    <form action="{{ route('comments.store', $issue->id) }}"
          method="POST">

        @csrf

        <textarea
            name="content"
            rows="4"
            placeholder="Write a comment..."></textarea>

        <button type="submit">
            Add Comment
        </button>

    </form>

</div>

@endsection