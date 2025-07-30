<?php

namespace App\Http\Controllers;

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
            $user = Auth::user();

            if ($user->role == 'admin') 
                return view('admin.dashboard');
             else
                return view('content_admin.dashboard');
          
           
            
        }

    
}
