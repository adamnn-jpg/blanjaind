<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/kategori', [KategoriController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users.index');
});

Route::get('users/charts', function () {
    return view('users.charts');
});

Route::get('users/button', function () {
    return view('users.button');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
