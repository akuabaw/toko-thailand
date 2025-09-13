<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/produk', function () {
    return view('products');
});
Route::get('/keranjang', function () {
    return view('cart');
});
Route::get('/order', function () {
    return view('track');
});
Route::get('/tentang', function () {
    return view('about');
});
Route::get('/detail', function () {
    return view('product-detail');
});