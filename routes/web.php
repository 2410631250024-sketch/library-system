<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Halaman yang HANYA BISA diakses jika BELUM login (Guest)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
});

// Halaman yang BISA DIAKSES Admin & Petugas setelah LOGIN (Auth)
Route::middleware('auth')->group(function () {
    Route::resource('books', BookController::class);
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/members', [MemberController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Halaman yang HANYA BISA DIAKSES ADMIN (Menggunakan Gate 'can:manage-users')
Route::middleware(['auth', 'can:manage-users'])->group(function () {
    Route::resource('users', UserController::class);
});

// Redirect halaman utama ke dashboard
Route::get('/', function () {
    return redirect('/dashboard');
});