<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
});

Route::get('/books', function () {
    return view('books.index');
});

Route::get('/categories', function () {
    return view('categories.index');
});

Route::get('/books/{slug}', function (string $slug) {
    return view('books.details', ['slug' => $slug]);
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name('forgot-password');
Route::post('/login', [AuthController::class, 'handleLogin']);
Route::post('/logout', [AuthController::class, 'handleLogout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/panel', function () {
        return view('panel.products.index');
    });

    Route::get('/panel/product/form', function () {
        return view('panel.products.form');
    });

    Route::get('/panel/product/detail', function () {
        return view('panel.products.detail');
    });

    Route::get('/panel/users', function () {
        return view('panel.users.index');
    });

    Route::get('/panel/settings', function () {
        return view('panel.settings.index');
    });

    Route::get('/panel/change-password', function () {
        return view('panel.settings.change-password');
    });
});