<?php

namespace App\Http\Controllers;

use app\Enums\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

  public function index()
        { 
             if (Auth::check() && Auth::user()->role === UserRole::Admin->value) 
             return view('admin.dashboard');
             else 
                return view('content_admin.dashboard'); 
        }
}
