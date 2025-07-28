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
       if (Auth::check() && Auth::user()->role === UserRole::Content->value) {
            return $next($request);
        }

        abort(403, 'unauthenticated action (ContentAdmin only).');
    }
}
