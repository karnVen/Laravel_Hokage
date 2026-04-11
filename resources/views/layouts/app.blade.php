<!DOCTYPE html>
<html>
<head>
    <title>{{ $appName }}</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        nav { background: #eee; padding: 10px; margin-bottom: 20px; }
        .job-card { border: 1px solid #ccc; padding: 15px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <nav>
        <strong>{{ $appName }}</strong> | 
        <a href="/jobs">All Jobs</a> | 
        <a href="/jobs/create">Post a Job</a>
    </nav>

    @yield('content')
    
</body>
</html>