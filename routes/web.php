<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

// Rute beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk halaman mobil
Route::middleware(['auth'])->group(function () {
    Route::get('/mobils', [MobilController::class, 'index'])->name('mobil.index');
    Route::get('/mobil/create', [MobilController::class, 'create'])->name('mobil.create');
    Route::post('/mobil/store', [MobilController::class, 'store'])->name('mobil.store');
    Route::get('/mobil/{id}', [MobilController::class, 'show'])->name('mobil.show');
    Route::get('/mobil/{id}/edit', [MobilController::class, 'edit'])->name('mobil.edit');
    Route::put('/mobil/{id}', [MobilController::class, 'update'])->name('mobil.update');
    Route::delete('/mobil/{id}', [MobilController::class, 'destroy'])->name('mobil.destroy');
});
// Di routes/web.php
Route::get('/home', 'HomeController@index')->name('home');

// Rute untuk halaman profil
Route::get('/profile', [ProfileController::class, 'show'])->name('profile')->middleware('auth');

// Rute untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
