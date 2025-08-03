<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\MovieResource;
use App\Http\Traits\ApiResponse;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    use ApiResponse;

   public function index()
{
     $movies = Movie::paginate(10); // ترجع 10 أفلام في كل صفحة
    return response()->json($movies);

}

public function show(Movie $movie)
{
    return $this->successResponse(new MovieResource($movie), 'movie viewed', 200);
}
}
