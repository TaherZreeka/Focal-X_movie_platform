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
    $movies = Movie::all();
    return $this->successResponse(MovieResource::collection($movies),'all movies',200);
}

public function show(Movie $movie)
{
    return $this->successResponse(new MovieResource($movie), 'movie viewed', 200);
}
}
