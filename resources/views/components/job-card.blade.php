<div class="job-card">
    <h2>{{ $title }}</h2>
    <p>{{ $company }}</p>
    
    @if ($isRemote)
        <span class="badge">Remote</span>
    @endif
    
    <div style="margin-top: 10px;">
        {{ $slot }}
    </div>
</div>