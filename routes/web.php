<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\TransaksiController;

Auth::routes();

// Redirect root URL to user.index
Route::get('/', [UserController::class, 'index'])->name('user.index');

// Admin routes
Route::middleware(['auth'])->group(function () {
    Route::resource('mobils', MobilController::class);
});

// Redirect authenticated users to the home page
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Profile route
Route::get('/profile', [ProfileController::class, 'show'])->name('profile')->middleware('auth');

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Login route
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// User page
Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Buyer routes
Route::resource('pembeli', PembeliController::class);

// Transaction routes
Route::resource('transaksi', TransaksiController::class);

// Route untuk User
Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Route untuk Transaksi
Route::resource('transaksi', TransaksiController::class);

// Route untuk Mobil
Route::resource('mobil', MobilController::class);
Route::resource('mobils', MobilController::class);