<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    public function index($movieId)
    {
        $reviews = Review::where('movie_id', $movieId)->paginate(20);

        return response()->json([
            'status' => 'success',
            'data' => $reviews
        ]);
    }

    // عرض تقييم معين (اختياري)
    public function show($movieId, $reviewId)
    {
        $review = Review::where('movie_id', $movieId)->where('id', $reviewId)->with('user:id,name')->firstOrFail();

        return response()->json([
            'status' => 'success',
            'data' => $review
        ]);
    }

    // إضافة تقييم جديد
    public function store(Request $request, Movie $movie)
    {


        $data = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        $review = $movie->reviews()->create([
            'user_id' => Auth::id(),
            'rating' => $data['rating'],
            'comment' => $data['comment'],
        ]);
        dd($request);
        return response()->json([
            'message' => 'تم إضافة التقييم بنجاح',
            'review' => $review
        ], 201);
    }
    // تحديث تقييم موجود
    public function update(Request $request, Movie $movie, Review $review)
    {
        // تأكد أن المستخدم صاحب التقييم
        if ($review->user_id !== $request->user()->id) {
            return response()->json(['message' => 'غير مصرح لك'], 403);
        }

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->save();

        return response()->json([
            'message' => 'تم تعديل التقييم بنجاح',
            'review' => $review
        ]);
    }

    // حذف تقييم
    public function destroy(Request $request, Movie $movie, Review $review)
    {
        if ($review->user_id !== $request->user()->id) {
            return response()->json(['message' => 'غير مصرح لك'], 403);
        }

        $review->delete();

        return response()->json([
            'message' => 'تم حذف التقييم بنجاح'
        ]);
    }
}
