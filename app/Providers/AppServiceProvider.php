<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // <--- THIS IS THE TOPIC FEATURE
        // Sharing this variable so EVERY view can access {{ $appName }}
        View::share('appName', 'Community Job Board');
    }
}