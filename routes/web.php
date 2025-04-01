<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::post('/contact-us', [PageController::class, 'submitContactForm'])->name('contact.submit');
Route::get('/offers', [PageController::class, 'offers'])->name('offers');
Route::get('/rooms', [PageController::class, 'rooms'])->name('rooms');
Route::get('/rooms/details/{id}', [PageController::class, 'roomsDetails'])->name('rooms.details');

Route::resource('activities', \App\Http\Controllers\ActivityController::class);
Route::resource('bookings', \App\Http\Controllers\BookingController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [\App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';