<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Community Job Board' }}</title>
    @stack('styles')
    <style>
        body { font-family: sans-serif; margin: 40px; }
        nav { background: #eee; padding: 10px; margin-bottom: 20px; }
        .job-card { border: 1px solid #ccc; padding: 15px; margin-bottom: 10px; }
        .badge { background: #007bff; color: white; padding: 3px 8px; border-radius: 12px; font-size: 0.8em; }
        .alert-success { background: #d4edda; color: #155724; padding: 10px; margin-bottom: 20px; }
        .error { color: red; font-size: 0.9em; }
    </style>
</head>
<body>
    <nav>
        <a href="/jobs">All Jobs</a> | 
        
        @auth
            <a href="/jobs/create">Post a Job</a>
        @endauth

        @guest
            <a href="/login">Login to Post</a>
        @endguest
    </nav>

    @session('status')
        <div class="alert-success">
            {{ $value }}
        </div>
    @endsession

    <main>
        {{ $slot }}
    </main>

    @stack('scripts')
</body>
</html>