<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        // <--- THIS IS THE TOPIC FEATURE
        // Returning a standard View response
        return view('jobs.index');
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
        return 'Showing specific details for job ID: ' . $id;
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