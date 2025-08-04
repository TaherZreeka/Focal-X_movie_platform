<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

  public function index()
        { 
            $user = Auth::user();
             if ( $user->hasRole('admin')) {
                return view('admin.dashboard');
            } elseif ($user->hasRole('content_admin')) {
                return view('content_admin.dashboard');
            } else {
                Auth::logout(); 
                return redirect('/login')->withErrors(['role' => 'Unauthorized role.']);            }
        }
}
