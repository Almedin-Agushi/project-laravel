@extends('layouts.app')

@section('content')

<h2>Dashboard</h2>

<div class="dashboard-grid">

    <div class="stat-card">
        <h3>Projects</h3>
        <p>{{ $projects }}</p>
    </div>

    <div class="stat-card">
        <h3>Issues</h3>
        <p>{{ $issues }}</p>
    </div>

    <div class="stat-card">
        <h3>Tags</h3>
        <p>{{ $tags }}</p>
    </div>

    <div class="stat-card">
        <h3>Comments</h3>
        <p>{{ $comments }}</p>
    </div>

</div>

@endsection