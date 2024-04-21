<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LogVisitMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        $user = $request->user();
        if (!Auth::check()) {
            // If not authenticated, log the visit
            Visit::create([
                'ip_address' => $request->ip(),
                'user_agent' => $request->header('User-Agent'),
                'page_visited' => $request->path()
            ]);
        } elseif (!$user->isAdmin()) {
            // If authenticated but not an admin, log the visit
            Visit::create([
                'ip_address' => $request->ip(),
                'user_agent' => $request->header('User-Agent'),
                'page_visited' => $request->path()
            ]);
        }


        return $next($request);
    }
}
