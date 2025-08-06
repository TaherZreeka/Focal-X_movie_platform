<?php

namespace App\Http\Controllers\ContentManager;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{public function index()
    {
        $reviews = Review::with('movie', 'user')->paginate(10);
        return view('content_admin.reviews.index', compact('reviews'));
    }
    public function approve(Review $review){
        $review->update(['approved'=>true]);
        return back()->with('success','تمت الموافقة على التقيم');
    }



    public function reject(Review $review)
    {
        $review->update(['approved' => false]);
        return back()->with('success', 'تم رفض التقييم');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('content_admin.reviews.index')
            ->with('success', 'تم حذف التقييم بنجاح');
    }
}
