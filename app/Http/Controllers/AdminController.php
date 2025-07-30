<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRoleRequest;
use App\Http\Requests\UpdateContentRoleRequest;



class AdminController extends Controller
{
    

 
     //  عرض تقرير الأفلام الأعلى مشاهدة أو الأعلى تقييماً
     public function reports()
     {
         $topRated = Movie::withAvg('ratings', 'rating')->orderByDesc('ratings_avg_rating')->take(10)->get();
         $mostViewed = Movie::orderByDesc('views')->take(10)->get();
 
         return view('admin.reports.index', compact('topRated', 'mostViewed'));
     }

    }