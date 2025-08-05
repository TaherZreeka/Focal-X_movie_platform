<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContentManager\ShowtimeController;
use App\Http\Controllers\ContentManager\MovieController;
use App\Http\Controllers\ContentManager\GenreController;
use App\Http\Controllers\ContentManager\ReviewController;
use App\Enums\UserRole;


use App\Http\Controllers\Admin\ContentManagerController;
use App\Http\Controllers\Admin\UserController;


Route::get('/', function () {
    return redirect('/login');
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {

   Route::resource('showtimes', ShowtimeController::class);
     
    // الأفلام
    Route::resource('movies', MovieController::class);
 // التقييمات 
    Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index'); 
    Route::post('reviews/{review}/reject', [ReviewController::class, 'reject'])->name('reviews.reject'); 
    Route::delete('reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy'); 
    Route::post('reviews/{review}/approve', [ReviewController::class, 'approve'])->name('reviews.approve'); 
 
    // الأنواع 
    Route::get('genres', [GenreController::class, 'index'])->name('genres.index'); 
    Route::post('genres', [GenreController::class, 'store'])->name('genres.store'); 
    Route::put('genres/{genre}', [GenreController::class, 'update'])->name('genres.update'); 
    Route::delete('genres/{genre}', [GenreController::class, 'destroy'])->name('genres.destroy'); 
 

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    
    Route::resource('users', UserController::class)->names('admin.users');
    Route::resource('content-managers', ContentManagerController::class)->names('admin.content');
        //  عرض تقارير الاعلى مشاهدة
    Route::get('/reports', [AdminController::class, 'reports'])->name('admin.reports');
});


//Route::middleware(['auth'])->group(function () {
  //  Route::resource('showtimes', App\Http\Controllers\ContentManager\ShowtimeController::class);

//});

