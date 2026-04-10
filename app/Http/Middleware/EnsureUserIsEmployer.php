<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsEmployer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()->type !== 'employer') {
            // <--- THIS IS THE TOPIC FEATURE
            return redirect('/jobs')->with('error', 'Only employers can post jobs.');
        }
        return $next($request);
    }
    
}