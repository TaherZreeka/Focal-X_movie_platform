<?php

namespace App\Http\Middleware;

use app\Enums\UserRole;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ( Auth::user()->role !== UserRole::Admin->value) {
            abort(403, 'Unauthorized action (Admin only).'); 
        }
            return $next($request);
    }
}
