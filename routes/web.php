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

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/forgot-password', function () {
    return view('auth/forgot-password');
});

Route::get('/panel', function () {
    return view('panel/products/index');
});

Route::get('/panel/product/form', function () {
    return view('panel/products/form');
});

Route::get('/panel/product/detail', function () {
    return view('panel/products/detail');
});

Route::get('/panel/users', function () {
    return view('panel/users/index');
});

Route::get('/panel/settings', function () {
    return view('panel/settings/index');
});