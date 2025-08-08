<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Movie;
use App\Http\Controllers\Controller;
use App\Models\Review;

class AdminController extends Controller
{
     public function home()
    {
        $userCount = User::count();
        $movieCount = Movie::count();
        $reviewCount = Review::count();
         $latestReview = Review::latest()->with(['user', 'movie'])->first();
          $latestMovie = Movie::latest()->first();
        return view('content_admin.dashboard', compact('userCount', 'movieCount','reviewCount','latestReview','latestMovie'));
    }


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
