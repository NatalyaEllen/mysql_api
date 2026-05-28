<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products-view', function () {
    $products = DB::table('products')->get();
    return view('products', compact('products'));
});