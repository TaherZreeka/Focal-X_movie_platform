<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
   public function index()
{
    return response()->json(Movie::all());

}

public function show(Movie $movie)
{
     return response()->json($movie);
}
}
