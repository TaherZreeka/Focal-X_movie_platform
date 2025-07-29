<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\ReviewController;
use App\Http\Controllers\User\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Route::apiResource("/user",UserController::class);
Route::post('register',[AuthController::class,"register"]);
Route::post('login',[AuthController::class,"login"]);
Route::post('logout',[AuthController::class,"logout"])->middleware('auth:sanctum');


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/movies/{movie}/reviews', [ReviewController::class, 'store']);
    Route::put('/movies/{movie}/reviews/{reviewId}', [ReviewController::class, 'update']);
    Route::delete('/movies/{movie}/reviews/{reviewId}', [ReviewController::class, 'destroy']);
});

Route::get('/movies/{movieId}/reviews', [ReviewController::class, 'index']);
Route::get('/movies/{movieId}/reviews/{reviewId}', [ReviewController::class, 'show']);

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/{movie}', [MovieController::class, 'show']);
