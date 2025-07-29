<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowtimeController;

Route::get('/', function () {
    return redirect('/login');
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::resource('showtimes', ShowtimeController::class);
});


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

