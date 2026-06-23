<nav>
    <a href="{{ route('projects.index') }}">Projects</a> |

    <a href="{{ route('issues.index') }}">Issues</a> |

    <a href="{{ route('tags.index') }}">Tags</a>
</nav>

<hr>

<h2>Tags</h2>

<a href="{{ route('tags.create') }}">Create Tag</a>

<hr>

@foreach($tags as $tag)
    <h3>{{ $tag->name }}</h3>
    <p>{{ $tag->color }}</p>
    <hr>
@endforeach