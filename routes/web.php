<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/books', function () {
    return view('books/index');
});

Route::get('/categories', function () {
    return view('categories/index');
});

Route::get('/books/{slug}', function (string $slug) {
    return view('books/details', ['slug' => $slug]);
});

Route::get('/login', function () {
    return view('auth/login');
});