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

Route::middleware(RedirectIfAuthenticated::class)->group(function() {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'handleLogin']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'handleRegister']);

    Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'handleForgotPassword'])->name('password.email');

    Route::get('/reset-password/{token}', [AuthController::class, 'showResetPassword'])->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'handleResetPassword'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/panel', [BookController::class, 'index'])->name('books.index');

    Route::get('/panel/book/create', [BookController::class, 'showCreateForm'])->name('books.show.create');
    Route::post('/panel/book', [BookController::class, 'handleCreate'])->name('books.create');
    
    Route::get('/panel/book/{book}/edit', [BookController::class, 'showUpdateForm'])->name('books.show.update');
    Route::put('/panel/book/{book}', [BookController::class, 'handleUpdate'])->name('books.update');
    
    Route::delete('/panel/book/{book}/delete', [BookController::class, 'handleDelete'])->name('books.delete');

    Route::get('/panel/book/{book}/approval', [BookController::class, 'showApproval'])->name('books.show.approval');
    Route::put('/panel/book/{book}/approval', [BookController::class, 'handleApproval'])->name('books.approval');

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