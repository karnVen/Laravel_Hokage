@extends('layouts.app')

@section('content')
    <h1>Available Roles ({{ $total }})</h1>

    @if (session('status'))
        <div class="success-banner" style="background: #d4edda; padding: 10px; color: #155724;">
            {{ session('status') }}
        </div>
    @endif

    @foreach ($jobs as $job)
        <div class="job-card">
            <h2>{{ $job['title'] }}</h2>
            <p>{{ $job['company'] }}</p>
            <a href="/jobs/{{ $job['id'] }}">View Details</a>
        </div>
    @endforeach
@endsection