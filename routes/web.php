<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;


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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [MobilController::class, 'index'])->name('mobil.index');
Route::get('/create', [MobilController::class, 'create'])->name('mobil.create');
Route::post('/store', [MobilController::class, 'store'])->name('mobil.store');

Route::get('/mobils', [MobilController::class, 'index'])->name('mobil.index');

Route::get('/mobil/{id}', [MobilController::class, 'show'])->name('mobil.show');
Route::get('/mobil/{id}/edit', [MobilController::class, 'edit'])->name('mobil.edit');
Route::delete('/mobil/{id}', [MobilController::class, 'destroy'])->name('mobil.destroy');
Route::put('/mobil/{id}', [MobilController::class, 'update'])->name('mobil.update');

Route::get('/profile', function () {
    return view('profile');
});

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');