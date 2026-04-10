<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    // <--- THIS IS THE TOPIC FEATURE
    public function index()
    {
        return 'Showing a list of all jobs (index method)';
    }

    // <--- THIS IS THE TOPIC FEATURE
    public function create()
    {
        // We link this back to the view we created in the CSRF topic
        return view('jobs.create'); 
    }

    // <--- THIS IS THE TOPIC FEATURE
    public function store(Request $request)
    {
        // $request->title pulls data from the form we made earlier
        $title = $request->input('title');
        return 'Job stored successfully! Title: ' . $title;
    }

    // <--- THIS IS THE TOPIC FEATURE
    public function show(string $id)
    {
        return 'Showing specific details for job ID: ' . $id;
    }

    // <--- THIS IS THE TOPIC FEATURE
    public function edit(string $id)
    {
        return 'Showing the edit form for job ID: ' . $id;
    }

    // <--- THIS IS THE TOPIC FEATURE
    public function update(Request $request, string $id)
    {
        return 'Updating job ID ' . $id . ' with new data';
    }

    // <--- THIS IS THE TOPIC FEATURE
    public function destroy(string $id)
    {
        return 'Deleted job ID: ' . $id;
    }
}