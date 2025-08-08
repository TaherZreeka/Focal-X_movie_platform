<?php

namespace App\Http\Controllers\ContentManager;
use App\Http\Controllers\Controller;
use App\Http\Requests\GenreRequeat;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{public function index()
    {
        $genres = Genre::paginate(10);
        return view('content_admin.genres.index', compact('genres'));
    }

    public function store(GenreRequeat $request)
    {
        Genre::create($request->validated());
        return back()->with('success', 'تم إضافة النوع بنجاح');
    }

    public function update(GenreRequeat $request, Genre $genre)
    {
        $genre->update($request->validated());
        return back()->with('success', 'تم تحديث النوع بنجاح');
    }

    public function destroy(Genre $genre)
    {
        if ($genre->movies()->count() > 0) {
            return back()->with('error', 'لا يمكن حذف النوع لأنه مرتبط بأفلام');
        }

        $genre->delete();
        return back()->with('success', 'تم حذف النوع بنجاح');
    }
}
