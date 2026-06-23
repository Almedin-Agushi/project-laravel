<h2>Create Tag</h2>

<form action="{{ route('tags.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Tag Name">

    <br><br>

    <input type="text" name="color" placeholder="Color">

    <br><br>

    <button type="submit">
        Save Tag
    </button>
</form>