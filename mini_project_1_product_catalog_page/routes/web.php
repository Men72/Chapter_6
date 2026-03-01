<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('products', function () {
    $products = [
        ['name' => 'Laptop', 'price' => 999.99, 'stock' => 5],
        ['name' => 'Smartphone', 'price' => 499.99, 'stock' => 0],
        ['name' => 'Tablet', 'price' => 299.99, 'stock' => 12],
    ];
    return view('products', compact('products'));
});