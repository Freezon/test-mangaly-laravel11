<?php

use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('app.catalog');
});

Route::get('cart', function () {
    return view('app.cart');
});
