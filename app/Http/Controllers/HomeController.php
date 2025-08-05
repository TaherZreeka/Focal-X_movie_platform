<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Enums\UserRole;
use Illuminate\Http\Request;
=======
>>>>>>> origin/nour
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

  public function index()
<<<<<<< HEAD
        {
             if (Auth::check() && Auth::user()->role === UserRole::Admin->value)
             return view('admin.dashboard');
             else
                return view('content_admin.dashboard');
=======
        { 
            $user = Auth::user();
             if ( $user->hasRole('admin')) {
                return view('admin.dashboard');
            } elseif ($user->hasRole('content_admin')) {
                return view('content_admin.dashboard');
            } else {
                Auth::logout(); 
                return redirect('/login')->withErrors(['role' => 'Unauthorized role.']);            }
>>>>>>> origin/nour
        }
}
