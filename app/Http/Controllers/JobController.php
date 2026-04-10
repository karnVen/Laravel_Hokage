<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return 'Showing a list of all jobs (index method)';
    }

    public function create()
    {
        return view('jobs.create'); 
    }

    public function store(Request $request)
    {
        // <--- THIS IS THE TOPIC FEATURE
        // Safety: Extract only the exact text fields we want, ignoring any injected malicious fields
        $data = $request->only(['title', 'company', 'location', 'salary', 'description']);

        // <--- THIS IS THE TOPIC FEATURE
        // Safely extract the checkbox as a true/false boolean
        $data['is_remote'] = $request->boolean('is_remote');

        // <--- THIS IS THE TOPIC FEATURE
        // Handle file upload if present and valid
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            
            // <--- THIS IS THE TOPIC FEATURE
            // Store the file in the 'public/logos' directory and save the path
            $data['logo_path'] = $request->file('logo')->store('logos', 'public');
        }

        // Simulate a validation failure for demonstration (since we haven't learned true Validation yet)
        if (empty($data['title'])) {
            // <--- THIS IS THE TOPIC FEATURE
            return redirect('/jobs/create')->withInput();
        }

        // We haven't covered Eloquent DB saving yet, so we will just return the array to see it worked
        // Job::create($data); 
        
        return $data;
    }

    public function show(string $id)
    {
        return 'Showing specific details for job ID: ' . $id;
    }

    public function edit(string $id)
    {
        return 'Showing the edit form for job ID: ' . $id;
    }

    public function update(Request $request, string $id)
    {
        return 'Updating job ID ' . $id . ' with new data';
    }

    public function destroy(string $id)
    {
        return 'Deleted job ID: ' . $id;
    }
}