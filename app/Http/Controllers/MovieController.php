<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequeat;
use App\Models\Genre;
use App\Models\Movie;
//use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; //as FacadesStorage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies= Movie::with('genres')->paginate(5);
        return view('content_admin.movies.index',compact('genres'));
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
        $movie = Movie::create([
            'title'=>$request->title,
            'year'=>$request->year,
            'duration'=>$request->duration,
            'language'=>$request->language,
            'poster_url'=>$posterpath,
            'description'=>$request->description,
            'trailer_url'=>$request->trailer_url,
            'age_rating'=>$request->age_rating,


        ]);
        $movie->genres()->attach($request->genres);
        return redirect()->route('content_admin.movies.index')->with('success','add the movie successfule');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id,Movie $movie)
    {
      $movie->load('genres','shows','reviews');
      return view('content_admin.movies.show',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id ,Movie $movie)
    {
    $genres = Genre::all();
    $selectGenres = $movie->genre->pluck('id')->toArray();
    return view('content_adminr.movies.edit', compact('movie'.'genres','selectGenres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovieRequeat $request, string $id, Movie $movie)
    {
         $data = $request->validated();
         if ($request->hasFile('poster')) {
            Storage::disk('public')->delete($movie->poster_url);
            $data['poster_url'] = $request->file('poster')->store('posters', 'public');
        }

        $movie->update($data);
        $movie->genres()->sync($request->genres);

        return redirect()->route('content_admin.movies.index')
            ->with('success', 'تم تحديث الفيلم بنجاح');
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id,Movie $movie)
    {
        Storage::disk('public')->delete($movie->poster_url);
        $movie->genres()->detach();
        $movie->shows()->delete();
        $movie->reviews()->delete();
        $movie->delete();

        return redirect()->route('content_admin.movies.index')
            ->with('success', 'تم حذف الفيلم بنجاح');
    }
}
