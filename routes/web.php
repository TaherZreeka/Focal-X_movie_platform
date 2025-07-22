<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
       //  تخزين المستحدم او المسئول
    Route::post('/users', [AdminController::class, 'storeUser'])->name('admin.users.store');
       // تعديل المستخدم او المسئول
    Route::get('/users/{id}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/users/{id}', [AdminController::class, 'updateUser'])->name('admin.users.update');
        // حذف المستخدم او المسئول
    Route::delete('/users/{id}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
        //  عرض تقارير الاعلى مشاهدة
    Route::get('/reports', [AdminController::class, 'reports'])->name('admin.reports');
});
