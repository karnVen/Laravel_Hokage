<!DOCTYPE html>
<html>
<head>
    <title>All Jobs</title>
    <style>
        .success-banner { background: #d4edda; color: #155724; padding: 10px; margin-bottom: 20px; border: 1px solid #c3e6cb; }
    </style>
</head>
<body>
    <h1>Community Job Board</h1>

    @if (session('status'))
        <div class="success-banner">
            {{ session('status') }}
        </div>
    @endif

    <a href="/jobs/create">Post a New Job</a>

    <p>Job list will appear here soon...</p>
</body>
</html>