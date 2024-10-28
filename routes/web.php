<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewsController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/reviews', [ReviewsController::class, 'show'])->name('reviews.show');
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
Route::get('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/reservation/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservation.edit');
Route::put('/reservation/{reservation}/update', [ReservationController::class, 'update'])->name('reservation.update');
Route::delete('/reservation/{reservation}/destroy', [ReservationController::class, 'destroy'])->name('reservation.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
    Route::get('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
    Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get('/reservation/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservation.edit');
    Route::put('/reservation/{reservation}/update', [ReservationController::class, 'update'])->name('reservation.update');
    Route::delete('/reservation/{reservation}/destroy', [ReservationController::class, 'destroy'])
    ->name('reservation.destroy')
    ->middleware(AdminAuth::class);
   
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
