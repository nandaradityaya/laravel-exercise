<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::resource('products', ProductController::class);

Route::get('/category/{category}', [FrontController::class, 'filterByCategory'])->name('category.filter');
