<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/product-details', function () {
    return view('product-details');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});

