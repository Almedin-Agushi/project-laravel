<select id="projectSelect" name="project_id">
    @foreach($projects as $project)
        <option value="{{ $project->id }}">{{ $project->name }}</option>
    @endforeach
</select>

<div id="projectDetails"></div>

<script>
document.getElementById('projectSelect').addEventListener('change', function() {
    let projectId = this.value;

    fetch('/projects/' + projectId) // route që kthen JSON
        .then(response => response.json())
        .then(data => {
            document.getElementById('projectDetails').innerText =
                data.description + " (Start: " + data.start_date + " | Deadline: " + data.deadline + ")";
        });
});
</script>
