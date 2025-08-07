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
        return back()->with('success','Evaluation approved');
    }



    public function reject(Review $review)
    {
        $review->update(['approved' => false]);
        return back()->with('success', 'Rating rejected');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index')
            ->with('success', 'The rating has been successfully deleted.');
    }
}
