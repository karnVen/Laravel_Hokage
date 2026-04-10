<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
// routes/web.php

// Homepage - show all job listings
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

// Show a single job listing (e.g., /jobs/42)
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');

// Show the "Post a Job" form
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');

// Handle the form submission
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');

// Delete a job listing
Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');

// Redirect old URL to new URL
Route::redirect('/listings', '/jobs');