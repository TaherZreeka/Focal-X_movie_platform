<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Enums\UserRole;

class AdminMiddleware
{
   

    public function handle(Request $request, Closure $next): Response
    

    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
    
        $user = Auth::user();
    
        // تحقق من القيمة باستخدام enum
        if ($user->role !== UserRole::Admin) {
            abort(403, 'Unauthorized');
        }
    
        return $next($request);
    }
    
}
