<x-layout>
    <x-slot:title>Post a Job</x-slot:title>

    <h1>Post a New Job Listing</h1>

    <form method="POST" action="/jobs" enctype="multipart/form-data">
        @csrf
        
        <div style="margin-bottom: 10px;">
            <label for="title">Job Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
            
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        
        <div style="margin-bottom: 10px;">
            <label for="company">Company Name:</label>
            <input type="text" id="company" name="company" value="{{ old('company') }}">
        </div>

        <button type="submit">Post Job</button>
    </form>
</x-layout>