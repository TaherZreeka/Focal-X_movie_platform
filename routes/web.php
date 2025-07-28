<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\{
    MovieController,
    ShowController,
    ReviewController,
    GenreController,
};

Route::get('/', function () {
    return redirect('/login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {

      // عرض مشتركين
 Route::get('/users', [AdminController::class, 'users'])->name('admin.users.index');

      // عرض مسؤلي المحتوى
 Route::get('/content-managers', [AdminController::class, 'contentManagers'])->name('admin.content.index');
       //انشاء مستحدم او مسئول
 Route::get('/users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
       //  تخزين المستحدم او المسئولc
    Route::post('/users', [AdminController::class, 'storeUser'])->name('admin.users.store');
       // تعديل المستخدم او المسئول
    Route::get('/users/{id}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/users/{id}', [AdminController::class, 'updateUser'])->name('admin.users.update');
        // حذف المستخدم او المسئول
    Route::delete('/users/{id}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
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