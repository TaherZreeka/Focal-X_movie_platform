<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ContentManagerController;

Route::get('/', function () {
    return redirect('/login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    
    Route::resource('users', UserController::class)->names('admin.users');
    Route::resource('content-managers', ContentManagerController::class)->names('admin.content');
  
        //  عرض تقارير الاعلى مشاهدة
    //Route::get('/reports', [AdminController::class, 'reports'])->name('admin.reports');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('showtimes', App\Http\Controllers\ShowtimeController::class);
});

