@extends('layouts.app')

@section('content')
    <h1>{{ $jobTitle }}</h1>
    <p>Job ID Number: {{ $jobId }}</p>
    
    <a href="/jobs">← Back to Listings</a>
@endsection