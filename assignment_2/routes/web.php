<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard', ['role' => 'admin']);
});
Route::get('/dashboard/user', function () {
    return view('dashboard', ['role' => 'user']);
});