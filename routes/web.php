<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::middleware(['guest'])->group(function () {
    Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::post('/admin/login', [AdminLoginController::class, 'submit'])->name('admin.auth');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AboutController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminLoginController::class, 'profileAdmin'])->name('admin.profile');
    Route::get('/admin/logout', [AboutController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/profile/edit', [AboutController::class, 'edit'])->name('admin.profile.edit');
    Route::put('/admin/profile/update', [AboutController::class, 'update'])->name('admin.profile.update');
});