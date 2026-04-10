<!DOCTYPE html>
<html>
<head>
    <title>Post a Job</title>
</head>
<body>
    <h1>Post a New Job Listing</h1>

    <form method="POST" action="/jobs" enctype="multipart/form-data">
        @csrf
        
        <div>
            <label for="title">Job Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
        </div>
        
        <div>
            <label for="company">Company Name:</label>
            <input type="text" id="company" name="company" value="{{ old('company') }}">
        </div>

        <div>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" value="{{ old('location') }}">
        </div>

        <div>
            <label for="salary">Salary:</label>
            <input type="number" id="salary" name="salary" value="{{ old('salary') }}">
        </div>

        <div>
            <label for="description">Job Description:</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
        </div>

        <div>
            <label>
                <input type="checkbox" name="is_remote" value="1" {{ old('is_remote') ? 'checked' : '' }}> 
                Remote Friendly?
            </label>
        </div>

        <div>
            <label for="logo">Company Logo:</label>
            <input type="file" id="logo" name="logo">
        </div>

        <button type="submit">Post Job</button>
    </form>
</body>
</html>