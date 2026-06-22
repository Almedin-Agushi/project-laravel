<h2>Create Project</h2>

<form action="{{ route('projects.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Project Name">

    <br><br>

    <textarea name="description" placeholder="Description"></textarea>

    <br><br>

    <input type="date" name="start_date">

    <br><br>

    <input type="date" name="deadline">

    <br><br>

    <button type="submit">
        Save Project
    </button>
</form>