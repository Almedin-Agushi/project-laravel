<h2>Edit Issue</h2>

<form action="{{ route('issues.update', $issue->id) }}" method="POST">
    @csrf
    @method('PUT')

    <select name="project_id">
        @foreach($projects as $project)
            <option value="{{ $project->id }}"
                {{ $issue->project_id == $project->id ? 'selected' : '' }}>
                {{ $project->name }}
            </option>
        @endforeach
    </select>

    <br><br>

    <input type="text"
           name="title"
           value="{{ $issue->title }}">

    <br><br>

    <textarea name="description">{{ $issue->description }}</textarea>

    <br><br>

    <select name="status">
        <option value="open" {{ $issue->status == 'open' ? 'selected' : '' }}>Open</option>
        <option value="in_progress" {{ $issue->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
        <option value="closed" {{ $issue->status == 'closed' ? 'selected' : '' }}>Closed</option>
    </select>

    <br><br>

    <select name="priority">
        <option value="low" {{ $issue->priority == 'low' ? 'selected' : '' }}>Low</option>
        <option value="medium" {{ $issue->priority == 'medium' ? 'selected' : '' }}>Medium</option>
        <option value="high" {{ $issue->priority == 'high' ? 'selected' : '' }}>High</option>
    </select>

    <br><br>

    <input type="date"
           name="due_date"
           value="{{ $issue->due_date }}">

    <br><br>

    <button type="submit">
        Update Issue
    </button>
</form>