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

Route::get('/blog-page', function () {
    return view('pages.blog-page');
})->name('blog.page');

Route::get('/product-page', function () {
    return view('pages.product-page');
})->name('product.page');


Route::get('/service-page', function () {
    return view('pages.service-page');
})->name('service.page');


Route::get('/our-strength', function () {
    return view('pages.our-strength');
})->name('strength.page');