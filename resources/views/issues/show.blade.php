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

