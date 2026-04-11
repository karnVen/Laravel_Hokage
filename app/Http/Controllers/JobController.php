<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class JobController extends Controller
{
   public function index()
    {
        // We will fake database data for now since we haven't learned Models
        $mockJobs = [
            ['id' => 1, 'title' => 'Laravel Dev', 'company' => 'Acme'],
            ['id' => 2, 'title' => 'Vue Expert', 'company' => 'StartUp Inc']
        ];
        
        // <--- THIS IS THE TOPIC FEATURE
        // Passing data array to the view
        return view('jobs.index', [
            'jobs' => $mockJobs,
            'total' => 2
        ]);
    }

    public function create()
    {
        return view('jobs.create'); 
    }

    public function store(Request $request)
    {
        $data = $request->only(['title', 'company', 'location', 'salary', 'description']);
        $data['is_remote'] = $request->boolean('is_remote');

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $data['logo_path'] = $request->file('logo')->store('logos', 'public');
        }

        if (empty($data['title'])) {
            // <--- THIS IS THE TOPIC FEATURE
            // Redirect response back to the previous page with old input
            return back()->withInput();
        }

        // Simulate saving to the DB...
        
        // <--- THIS IS THE TOPIC FEATURE
        // Redirect response to a named route, flashing a success message
        return redirect()->route('jobs.index')
            ->with('status', 'Your job listing was posted successfully!');
    }

    public function show(string $id)
    {
        // <--- THIS IS THE TOPIC FEATURE
        // Checking if the view file actually exists before returning it
        if (View::exists('jobs.show')) {
            // Using the alternative ->with() syntax
            return view('jobs.show')
                ->with('jobId', $id)
                ->with('jobTitle', 'Sample Job for ID ' . $id);
        }

        return 'View not found!';
    }

    // Custom method to demonstrate JSON
    public function apiIndex()
    {
        // <--- THIS IS THE TOPIC FEATURE
        // Laravel automatically converts arrays to JSON responses
        return [
            ['title' => 'Laravel Dev', 'company' => 'Acme Corp'],
            ['title' => 'Vue Expert', 'company' => 'StartUp Inc']
        ];
    }
    
    // ... (keep edit, update, destroy methods as they were)
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