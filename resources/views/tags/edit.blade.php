@extends('layouts.app')

@section('content')
<h2>Edit Tag</h2>

<form action="{{ route('tags.update', $tag->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name</label>
    <input type="text"
           name="name"
           value="{{ $tag->name }}">

    <br><br>

    <label>Color</label>
    <input type="text"
           name="color"
           value="{{ $tag->color }}">

    <br><br>

    <button type="submit">
        Update
    </button>
</form>


@endsection