<x-layout>
    <x-slot:title>Browse Jobs</x-slot:title>

    <h1>Available Roles</h1>

    @forelse ($jobs as $job)
        
        <x-job-card 
            title="{{ $job['title'] }}" 
            company="{{ $job['company'] }}" 
            :is-remote="true"
        >
            <a href="/jobs/{{ $job['id'] }}">View Details</a>
        </x-job-card>

    @empty
        <p>No jobs posted yet. Be the first!</p>
    @endforelse

</x-layout>