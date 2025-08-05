<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use app\Enums\UserRole;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ContentAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
       if (Auth::user()->role !== UserRole::Content->value) {
            abort(403, 'Unauthorized action (ContentAdmin only).');
        }
            return $next($request);
    }
}
