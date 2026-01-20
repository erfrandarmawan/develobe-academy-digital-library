<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Middleware\RedirectIfAuthenticated;

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

Route::middleware(RedirectIfAuthenticated::class)->group(function() {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'handleLogin']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'handleRegister']);

    Route::get('/forgot-password', [AuthController::class, 'showForgotPassword']);
    Route::post('/forgot-password', [AuthController::class, 'handleForgotPassword']);

    Route::get('/reset-password/{token}', [AuthController::class, 'showResetPassword'])->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'handleResetPassword'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/panel', [BookController::class, 'index']);

    Route::get('/panel/book/form', function () {
        return view('panel.books.form');
    });

    Route::get('/panel/book/detail', function () {
        return view('panel.books.detail');
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

    Route::post('/logout', [AuthController::class, 'handleLogout'])->name('logout');
});