<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::get('',function(){
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('/categories',CategoryController::class);
Route::resource('/products',ProductController::class);

Route::post('/products/{product}/files',[FileController::class, 'files'])
    ->name('products.file');