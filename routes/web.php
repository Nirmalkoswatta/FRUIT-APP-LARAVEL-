<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class,'index']) ->name('product.index');
Route::get('/product/create', [ProductController::class,'create']) ->name('product.create');
Route::post('/product', [ProductController::class,'store']) ->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class,'edit']) ->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class,'update']) ->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class,'destroy']) ->name('product.destroy');
