<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// ... (keep your admin prefix group if you have it)

// <--- THIS IS THE TOPIC FEATURE
// This single line generates all 7 routes automatically mapped to JobController
Route::resource('jobs', JobController::class);