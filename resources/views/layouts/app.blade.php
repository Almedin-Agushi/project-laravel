<!DOCTYPE html>
<html>
<head>
    <title>Mini Issue Tracker</title>
    <style>
        body {
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #f9fafb;
    color: #1f2937;
    margin: 0;
    padding: 20px;
}

nav {
    background: #2563eb;
    padding: 12px 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    display: flex;
    gap: 20px; /* hapësirë mes linkeve */
}

nav a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.2s ease;
}

nav a:hover {
    color: #dbeafe;
    text-decoration: underline;
}

hr {
    margin: 20px 0;
    border: none;
    border-top: 1px solid #e5e7eb;
}

.container {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 12px }


    .badge-open{
    background: green;
    color: white;
    padding: 4px 8px;
    border-radius: 5px;
}

.badge-progress{
    background: orange;
    color: white;
    padding: 4px 8px;
    border-radius: 5px;
}

.badge-closed{
    background: red;
    color: white;
    padding: 4px 8px;
    border-radius: 5px;
}
    </style>
</head>
<body>

<nav>
    <a href="{{ route('projects.index') }}">Projects</a> |
    <a href="{{ route('projects.create') }}">New Project</a> |

    <a href="{{ route('issues.index') }}">Issues</a> |
    <a href="{{ route('issues.create') }}">New Issue</a> |

    <a href="{{ route('tags.index') }}">Tags</a> |
    <a href="{{ route('tags.create') }}">New Tag</a>
</nav>

<hr>

@yield('content')

</body>
</html>