<!DOCTYPE html>
<html>
<head>
    <title>Mini Issue Tracker</title>

    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f3f4f6;
            color: #1f2937;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        nav {
            background: #2563eb;
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 12px;
            border-radius: 6px;
        }

        nav a:hover {
            background: rgba(255,255,255,0.2);
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
.card h3{
    margin-top:0;
    color:#2563eb;
}

.card p{
    margin:8px 0;
}



.card:hover{
    transform:translateY(-3px);
    box-shadow:0 8px 20px rgba(0,0,0,0.12);
}
        h2 {
            margin-bottom: 20px;
        }
        label{
    display:block;
    margin-bottom:6px;
    font-weight:600;
}
        input,
        textarea,
        select{
            display:block;
            width:100%;
            padding:10px;
            margin-bottom:15px;
            border:1px solid #d1d5db;
            border-radius:6px;
            box-sizing:border-box;
        }

        button {
            background: #2563eb;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        .badge-open {
            background: green;
            color: white;
            padding: 4px 8px;
            border-radius: 5px;
        }

        .badge-progress {
            background: orange;
            color: white;
            padding: 4px 8px;
            border-radius: 5px;
        }

        .badge-closed {
            background: red;
            color: white;
            padding: 4px 8px;
            border-radius: 5px;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }
.tag-badge{
    background:#e5e7eb;
    padding:4px 8px;
    border-radius:15px;
    font-size:12px;
    margin-right:5px;
}
        .stat-card {
    background: #2563eb;
    color: white;
    padding: 18px;
    text-align: center;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    cursor: pointer;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.stat-card h3 {
    margin: 0;
    font-size: 18px;
}

.stat-card p {
    margin-top: 10px;
    font-size: 32px;
    font-weight: bold;
}

.success-box{
    background:#dcfce7;
    color:#166534;
    padding:12px;
    border-radius:8px;
    margin-bottom:15px;
}

.error-box{
    background:#fee2e2;
    color:#b91c1c;
    padding:12px;
    border-radius:8px;
    margin-bottom:15px;
}
    </style>

</head>
<body>

<div class="container">

    <nav>
        <a href="/">Dashboard</a>

        <a href="{{ route('projects.index') }}">Projects</a>
        <a href="{{ route('projects.create') }}">New Project</a>

        <a href="{{ route('issues.index') }}">Issues</a>
        <a href="{{ route('issues.create') }}">New Issue</a>

        <a href="{{ route('tags.index') }}">Tags</a>
        <a href="{{ route('tags.create') }}">New Tag</a>
    </nav>
@if(session('success'))
    <div class="success-box">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="error-box">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @yield('content')

</div>

</body>
</html>