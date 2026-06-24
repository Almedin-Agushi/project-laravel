@extends('layouts.app')

@section('content')

<h2>Dashboard</h2>

<div class="card">
    <h3>Projects: {{ $projects }}</h3>
</div>

<div class="card">
    <h3>Issues: {{ $issues }}</h3>
</div>

<div class="card">
    <h3>Tags: {{ $tags }}</h3>
</div>

<div class="card">
    <h3>Comments: {{ $comments }}</h3>
</div>

@endsection