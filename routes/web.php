<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//about page
Route::get('/about', function () {
    return view('about');
});

//products
Route::resource('/products', ProductController::class)
->only([
    'index'
]);
Route::get('product/{slug}', 'App\Http\Controllers\ProductController@show')->name('product.show');


//product details
Route::get('/product-details', function () {
    return view('product-detail');

});
