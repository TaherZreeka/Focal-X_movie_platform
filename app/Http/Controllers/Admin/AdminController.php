<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Movie;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    

 
     //  عرض تقرير الأفلام الأعلى مشاهدة أو الأعلى تقييماً
     public function reports()
    {
    $topRated = Movie::withAvg('ratings', 'rating')
                     ->orderByDesc('ratings_avg_rating')
                     ->take(10)
                     ->get();

    $mostViewed = Movie::orderByDesc('views')
                       ->take(10)
                       ->get();

    return view('admin.reports.index', compact('topRated', 'mostViewed'));
     }


    }