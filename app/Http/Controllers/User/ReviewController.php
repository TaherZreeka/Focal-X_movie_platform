<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\updateReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Http\Traits\ApiResponse;
use App\Models\Movie;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth:sanctum')->except(['index', 'show']);
    }

     use ApiResponse;
    public function index($movieId)
    {
        $reviews = Review::with(['user', 'movie'])
                    ->where('movie_id', $movieId)
                    ->paginate(20);
        return $this->successResponse(ReviewResource::collection($reviews),'all reviews',200);

    }

    // Show a specific review
    public function show($movieId, $reviewId)
    {
        $review = Review::where('movie_id', $movieId)->where('id', $reviewId)->with('user')->first();
        if( $review)
             return $this->successResponse(new ReviewResource($review),'Review retrieved successfully',200);
        return $this->errorResponse(' No review found for this movie with the specified ID', 403);
    
    }

    //   add new review
    public function store(StoreReviewRequest $request, Movie $movie)
    {
        $review = $movie->reviews()->create([
            'user_id' => Auth::id(),
            'rating' => $request['rating'],
            'comment' => $request['comment']
        ]);
        return $this->successResponse(new ReviewResource($review),'Review created successfully',200);
    }

    // update review
    public function update(updateReviewRequest $request, Movie $movie, Review $review)
    {
        if ($review->user_id !== $request->user()->id) {
            return $this->errorResponse(' You are not authorized to update this review', 403);
        }
         if ($review->movie_id !== $movie->id) {
            return $this->errorResponse('This review does not belong to the specified movie', 403);
        }
        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->save();

        return $this->successResponse(new ReviewResource($review),'Review updated successfully',200);
    }

    //  delete review

    public function destroy(Request $request, Movie $movie, Review $review)
    {
        if ($review->user_id !== $request->user()->id) {
            return $this->errorResponse('You are not authorized to delete this review', 403);
        }
          if ($review->movie_id !== $movie->id) {
            return $this->errorResponse('This review does not belong to the specified movie', 403);
        }
        $review->delete();
        return $this->successResponse(null,'Review deleted successfully',200);
    }
}
