<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->prefix('user')->name('user:')->group(function () {
    Route::get('', \App\Http\Controllers\UserIndexController::class)->name('index');
    Route::get('{id}', \App\Http\Controllers\UserEditController::class)->name('edit');
});
Route::middleware('auth')->prefix('calendar')->name('calendar:')->group(function () {
    Route::get('', \App\Http\Controllers\CalendarIndexController::class)->name('index');
});

require __DIR__ . '/auth.php';
