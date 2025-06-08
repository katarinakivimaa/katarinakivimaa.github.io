<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/shop', [PublicController::class, 'shop'])->name('shop');
Route::get('/shop/{product}', [PublicController::class, 'product'])->name('product');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact', [PublicController::class, 'mail'])->name('mail');
