<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('profile', function () {
    return view('profile',[
        'name' => 'Ou Piseth',
        'age' => 20,
        'email' => 'ou.piseth@example.com'
    ]);
});
Route::get('students',function(){
    $students = [
        ['name' => 'John Doe', 'age' => 20, 'email' => 'john.doe@example.com'],
        ['name' => 'Jane Smith', 'age' => 22, 'email' => 'jane.smith@example.com'],
    ];
    return view('students', ['students' => $students]);
});
Route::get('products', function () {
    $products = [
        ['name' => 'Laptop', 'price' => 999.99, 'stock' => 5],
        ['name' => 'Smartphone', 'price' => 499.99, 'stock' => 0],
        ['name' => 'Tablet', 'price' => 299.99, 'stock' => 12],
    ];
    return view('products', compact('products'));
});