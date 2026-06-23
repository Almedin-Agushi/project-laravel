<h2>Issues</h2>

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
    </form>

    <hr>

@endforeach