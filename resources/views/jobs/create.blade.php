<!DOCTYPE html>
<html>
<head>
    <title>Post a Job</title>
</head>
<body>
    <h1>Post a New Job Listing</h1>

    <form method="POST" action="/jobs">
        
        @csrf
        
        <div>
            <label for="title">Job Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        
        <div>
            <label for="company">Company Name:</label>
            <input type="text" id="company" name="company" required>
        </div>

        <button type="submit">Post Job</button>
    </form>
</body>
</html>