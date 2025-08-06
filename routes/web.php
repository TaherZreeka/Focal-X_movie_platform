<?php


use App\Http\Controllers\Admin\ContentManagerController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;









Auth::routes();

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/showtimes/trash', [ShowtimeController::class, 'trash'])->name('showtimes.trash');
Route::get('/showtimes/{showtime}/restore', [ShowtimeController::class, 'restore'])->name('showtimes.restore');
Route::delete('/showtimes/{showtime}/forcedelete', [ShowtimeController::class, 'forcedelete'])->name('showtimes.forcedelete');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::resource('showtimes', ShowtimeController::class);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [UserController::class, 'index'])->name('users.index');

//Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {

     Route::resource('users', UserController::class)->names('admin.users');
    Route::resource('content-managers', ContentManagerController::class)->names('admin.content');
        //  عرض تقارير الاعلى مشاهدة
    Route::get('/reports', [AdminController::class, 'reports'])->name('admin.reports');
});




Route::name('content-manager.')->prefix('content_admin')->middleware(['auth', 'role:content_admin|admin'])->group(function () {

    // لوحة التحكم
    Route::get('/dashboard', function () {
        return view('content_admin.dashboard');
    })->name('dashboard');

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

Route::middleware(['auth'])->group(function () {
    Route::resource('showtimes', App\Http\Controllers\ShowtimeController::class);
});

Route::get('/home', [AdminController::class, 'home'])->name('home');


