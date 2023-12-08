<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\ProductCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/Contact", function () {
    return view("ContactUs");
})->name('contact');

Route::get('/AboutUs', function () {
    return view('AboutUs');
});

Route::get('/Equipment', function () {
    return view('Equipment');
});

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/Signup', function () {
    return view('signup');
})->name('signup');

Route::get('/Login', function () {
    return view('login');
})->name('login');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/productcategories', [ProductCategoryController::class, 'index'])->name('productcategories.index');
Route::get('/productcategories/create', [ProductCategoryController::class, 'create'])->name('productcategories.create');
Route::post('/productcategories', [ProductCategoryController::class, 'store'])->name('productcategories.store');
