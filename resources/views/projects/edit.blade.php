<h2>Edit Project</h2>

<form action="{{ route('projects.update', $project->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <input type="text"
           name="name"
           value="{{ $project->name }}">

    <br><br>

    <textarea name="description">{{ $project->description }}</textarea>

    <br><br>

    <input type="date"
           name="start_date"
           value="{{ $project->start_date }}">

    <br><br>

    <input type="date"
           name="deadline"
           value="{{ $project->deadline }}">

    <br><br>

    <button type="submit">
        Update Project
    </button>

</form>