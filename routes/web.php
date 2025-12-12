<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/resources', [HomeController::class, 'resources'])->name('resources');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');