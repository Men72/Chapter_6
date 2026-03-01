<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('/profile', function () {
    $name = 'John Doe';
    $age = 25;
    return view('profile', compact('name', 'age'));
});