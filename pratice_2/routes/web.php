<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/students', function () {
    $students = ['Alice', 'Bob'];

    return view('students', [
        'students' => $students
    ]);
});