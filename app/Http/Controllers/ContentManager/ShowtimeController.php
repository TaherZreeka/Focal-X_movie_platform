<?php

namespace App\Http\Controllers\ContentManager;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreShowtimeRequest;
use App\Http\Requests\UpdateShowtimeRequest;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Showtime;
use Illuminate\Http\Request;

class ShowtimeController extends Controller
{
    /**
     * Display a listing of the showtimes.
     */
    public function index()
    {
       $showtimes = Showtime::with('movie')->get();
      return view('content_admin.show_time.index', compact('showtimes'));
    }

    /**
     * Show the form for creating a new Showtime.
     */
    public function create()
    {
         $movies = Movie::all();
         return view('content_admin.show_time.create', compact('movies'));
    }

    /**
     * Store a newly created Showtime in storage.
     */
    public function store(StoreShowtimeRequest  $request)
    {
        Showtime::create($request->validated());
        return redirect()->route('showtimes.index')->with('success', 'Showtime created successfully.');
    }

    /**
     * Display the specified Showtime.
     */
    public function show(Showtime $showtime)
    {
        return view('content_admin.show_time.show', compact('showtime'));
    }

    /**
     * Show the form for editing the specified showtime.
     */
    public function edit(Showtime $showtime)
    {
        $movies = Movie::all();
        return view('content_admin.show_time.edit', compact('showtime', 'movies'));
    }

    /**
     * Update the specified showtime in storage.
     */
    public function update(UpdateShowtimeRequest $request, Showtime $showtime)
    {
            $data = $request->validated();
            $showtime->update($data);
            return redirect()->route('showtimes.index')->with('success', 'Showtime updated successfully');  
    }

    /**
     * Remove the specified Showtime from storage.
    */
    public function destroy(Showtime $showtime)
    {
        $showtime->delete();
        return redirect()->route('showtimes.index')->with('success', 'Showtime deleted successfully.');
    }
     public function trash(){
        $showtimes = Showtime::onlyTrashed()->latest('deleted_at')->paginate(10);
         return view('content_admin.show_time.trash' ,compact('showtimes'));
    }
    public function restore($id ){
         $showtime=Showtime::onlyTrashed()->find($id)->restore();
          return redirect()->back();
        //   return redirect()->route('showtimes.index');
    }
    public function forcedelete($id ){
          $showtime=Showtime::onlyTrashed()->find($id)->forcedelete();
          return redirect()->back();
        //   return redirect()->route('showtimes.index');
    }


}
