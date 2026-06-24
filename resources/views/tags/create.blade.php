@extends('layouts.app')

@section('content')

<div class="card">

    <h2>Create Tag</h2>

    <form action="{{ route('tags.store') }}" method="POST">
        @csrf

        <label for="name">Tag Name</label>
        <input
            type="text"
            id="name"
            name="name"
            placeholder="Tag Name">

        <label for="color">Color</label>
        <input
            type="text"
            id="color"
            name="color"
            placeholder="Red, Blue, Green...">

        <button type="submit">
            Save Tag
        </button>

    </form>

</div>

@endsection