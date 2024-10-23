<?php

use App\Http\Controllers\HallController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/hall', [HallController::class, 'index'])->name('hall.index');
    Route::post('/admin/hall', [HallController::class, 'store'])->name('hall.store');
    Route::delete('/admin/hall/{id}', [HallController::class, 'destroy'])->name('hall.destroy');
});

require __DIR__.'/auth.php';
