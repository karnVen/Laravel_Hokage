<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
// <--- THIS IS THE TOPIC FEATURE
use App\Http\Middleware\EnsureUserIsEmployer;
use App\Http\Middleware\EnsureUserHasRole;

// PUBLIC routes — no middleware needed
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

// PROTECTED routes — only employers can post/delete jobs
// <--- THIS IS THE TOPIC FEATURE
Route::middleware(['auth', EnsureUserIsEmployer::class])->group(function () {
    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
    Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');
});

// ADMIN-ONLY routes — logged in + must have 'admin' role
// <--- THIS IS THE TOPIC FEATURE
Route::middleware(['auth', EnsureUserHasRole::class.':admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return 'Admin Dashboard';
    });
});


Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');
