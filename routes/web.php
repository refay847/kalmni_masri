<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('home');
});

Route::get('/packages',[CourseController::class, 'packages'])->middleware(['auth', 'verified'])->name('packages');
Route::get('/free_lecture',[CourseController::class, 'freeLecture'])->middleware(['auth', 'verified'])->name('free-lecture');


Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
