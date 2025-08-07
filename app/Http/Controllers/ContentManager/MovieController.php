<?php

namespace App\Http\Controllers\ContentManager;
use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequeat;
use App\Models\Genre;
use App\Models\Movie;
//use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; //as FacadesStorage;
use App\Enums\UserRole;

use App\Http\Requests\StoreShowtimeRequest;
use App\Http\Requests\UpdateShowtimeRequest;
use App\Models\User;
//use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies= Movie::with('genres')->paginate(5);
        return view('content_admin.movies.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $genres = Genre::all();
    return view('content_admin.movies.create',compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovieRequeat $request)
    {
        $posterpath = $request->file('poster')->store('poster','public');
        $trailerpath= $request->file('trailer_file')->store('trailer','public');
         $moviepath = $request->file('movie')->store('movie','public');
        $movie = Movie::create([
            'title'=>$request->title,
            'year'=>$request->year,
            'duration'=>$request->duration,
            'language'=>$request->language,
            'poster_url'=>$posterpath,
            'description'=>$request->description,
            'trailer_url'=>$trailerpath,
            'age_rating'=>$request->age_rating,
              'movie_url'=>$moviepath,

        ]);
        $movie->genres()->attach($request->genres);
        return redirect()->route('content_admin.movies.index')->with('success','add the movie successfulle');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
      $movie->load('genres','reviews');
      return view('content_admin.movies.show',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {

    $genres = Genre::all();
    $selectGenres = [];
    if($movie->genre){
    $selectGenres = $movie->genre->pluck('id')->toArray();}
    return view('content_admin.movies.edit', compact('movie','selectGenres','genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovieRequeat $request, Movie $movie)
    {
         $data = $request->validated();
         if ($request->hasFile('poster')) {
            Storage::disk('public')->delete($movie->poster_url);
            $data['poster_url'] = $request->file('poster')->store('posters', 'public');
        }
         $data = $request->validated();
         if ($request->hasFile('trailer')) {
            Storage::disk('public')->delete($movie->trailer_url);
            $data['trailer_url'] = $request->file('trailer')->store('trailer', 'public');
        }
          $data = $request->validated();
         if ($request->hasFile('movie')) {
            Storage::disk('public')->delete($movie->movie_url);
            $data['movie_url'] = $request->file('movie')->store('movie', 'public');
        }


        $movie->update($data);
        $movie->genres()->sync($request->genres);

        return redirect()->route('content_admin.movies.index')
            ->with('success', 'تم تحديث الفيلم بنجاح');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        Storage::disk('public')->delete($movie->poster_url);
        Storage::disk('public')->delete($movie->trailer_url);
        Storage::disk('public')->delete($movie->movie_url);
        $movie->genres()->delete();

        $movie->reviews()->delete();
        $movie->delete();

        return redirect()->route('')
            ->with('success', 'تم حذف الفيلم بنجاح');
    }
}
