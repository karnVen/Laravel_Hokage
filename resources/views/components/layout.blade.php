<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ $title ?? 'Community Job Board' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="bg-gray-50 text-gray-900 font-sans p-8">
    <nav class="mb-8 p-4 bg-white rounded shadow-sm flex gap-4">
        <a href="/jobs" class="text-blue-600 hover:underline">All Jobs</a>
        
        @auth
            <a href="/jobs/create" class="text-blue-600 hover:underline">Post a Job</a>
        @endauth

        @guest
            <a href="/login" class="text-blue-600 hover:underline">Login to Post</a>
        @endguest
    </nav>

    @session('status')
        <div class="p-4 mb-4 text-green-800 bg-green-100 rounded">
            {{ $value }}
        </div>
    @endsession

    <main>
        {{ $slot }}
    </main>

    @stack('scripts')
</body>
</html>