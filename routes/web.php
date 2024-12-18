<?php

use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThankYouController;


//Route::get('/', function () {
//    return view('home');
//});
Route::get('/', 'App\Http\Controllers\ProductController@homeIndex');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
});

//about page
Route::get('/about', function () {
    return view('about');
});

//products
Route::resource('/products', ProductController::class)
    ->only([
        'index',
    ]);

Route::get('product/{slug}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::get('/cart', 'App\Http\Controllers\CartController@index');

//product details
Route::get('/product-details', function () {
    return view('product-detail');
});

//checkout
Route::get('/checkout', 'App\Http\Controllers\OrderController@index')
    ->name('order.success');

//contact us
Route::get('/contact', function () {
    return view('contactus');
});
// thanks
Route::get('/thank-you', [ThankYouController::class, 'index'])
    ->name('order.success');

Route::get('/policies/{slug}', [PolicyController::class, 'show'])
    ->name('policies.show');


