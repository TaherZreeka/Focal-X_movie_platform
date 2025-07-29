<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
   public function index()
{
     $movies = Movie::paginate(10); // ترجع 10 أفلام في كل صفحة
    return response()->json($movies);

}

public function show(Movie $movie)
{
     return response()->json($movie);
}
}
