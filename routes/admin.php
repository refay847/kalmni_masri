<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::middleware('admin.guest')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'create'])
        ->name('admin.login');

    Route::post('/login', [AdminAuthController::class, 'store']);
});

Route::middleware('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    Route::post('/logout', [AdminAuthController::class, 'destroy'])
        ->name('admin.logout');
});