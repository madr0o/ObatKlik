<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

// default
Route::get('/',[ItemController::class, 'showItem'])->name('home');

// cart
Route::post('/cart/add/{itemId}', [CartController::class, 'addToCart'])->name('cart.add')->middleware('auth');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// search
Route::get('/items', [ItemController::class, 'search'])->name('items.search');

// upload foto
Route::post('/profile/upload-photo', [ProfileController::class, 'uploadPhoto'])->name('profile.upload.photo');

require __DIR__.'/auth.php';
