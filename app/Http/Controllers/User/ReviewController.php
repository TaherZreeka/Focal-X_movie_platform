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
       $this->middleware('auth:sanctum')->except(['index', 'show']);
    }
   public function index(Movie $movie)
{
    $reviews = $movie->reviews()
                    //  ->with('user:id,name')
                     ->paginate(10);

    return response()->json([
        'status' => 'success',
        'message' => 'تم جلب التقييمات بنجاح',
        'data' => $reviews,
    ]);
}

    // عرض تقييم معين (اختياري)
   public function show(Movie $movie, Review $review)
{
    // تأكد أن التقييم ينتمي للفيلم (أمان إضافي)
    if ($review->movie_id !== $movie->id) {
        return response()->json([
            'status' => 'error',
            'message' => 'هذا التقييم لا ينتمي لهذا الفيلم',
        ], 404);
    }

    $review->load('user:id,name'); // جلب بيانات المستخدم المرتبط

    return response()->json([
        'status' => 'success',
        'data' => $review,
    ]);
}
    // إضافة تقييم جديد
   public function store(Request $request, Movie $movie)
{      $user = Auth::user();

    if (!$user) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }
     $validated = $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'required|string|max:1000',
    ]);

    // 3. إنشاء المراجعة
    $review = Review::create([
        'user_id' => $user->id,
        'movie_id' => $movie->id,
        'rating' => $validated['rating'],
        'comment' => $validated['comment'],
         'approved' => false,
    ]);

    return response()->json($review, 201);
}


    // تحديث تقييم موجود
   public function update(Request $request, Movie $movie, Review $review)
{
    if ($review->user_id !== $request->user()->id) {
        return response()->json(['message' => 'غير مصرح لك'], 403);
    }

    $data = $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'nullable|string',
    ]);

    $review->rating = $data['rating'];
    $review->comment = $data['comment'] ?? null;
    $review->save();

    return response()->json([
        'status' => 'success',
        'message' => 'تم تعديل التقييم بنجاح',
        'data' => $review,
    ]);
}

    //حذف تقييم
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
