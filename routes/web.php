<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect('/login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [UserController::class, 'index'])->name('users.index');

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

Route::get('/showtimes/trash', [ShowtimeController::class, 'trash'])->name('showtimes.trash');
Route::get('/showtimes/{showtime}/restore', [ShowtimeController::class, 'restore'])->name('showtimes.restore');
Route::delete('/showtimes/{showtime}/forcedelete', [ShowtimeController::class, 'forcedelete'])->name('showtimes.forcedelete');
Route::middleware(['auth'])->group(function () {
    Route::resource('showtimes', App\Http\Controllers\ShowtimeController::class);
});
