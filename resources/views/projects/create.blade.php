@extends('layouts.app')

@section('content')

<div class="card">

    <h2>Create Project</h2>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <label for="name">Project Name</label>
        <input
            type="text"
            id="name"
            name="name"
            placeholder="Project Name">

        <label for="description">Description</label>
        <textarea
            id="description"
            name="description"
            rows="4"
            placeholder="Description"></textarea>

        <label for="start_date">Start Date</label>
        <input
            type="date"
            id="start_date"
            name="start_date">

        <label for="deadline">End Date</label>
        <input
            type="date"
            id="deadline"
            name="deadline">

        <button type="submit">
            Save Project
        </button>

    </form>

</div>

@endsection