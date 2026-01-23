<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserStatus;
use App\Http\Middleware\RedirectIfAuthenticated;

Route::get('/', [PageController::class, 'index'])->name('home');

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

Route::middleware(['auth', CheckUserStatus::class])->group(function () {
    Route::get('/panel', [BookController::class, 'index'])->name('books.index');

    Route::get('/panel/book/create', [BookController::class, 'showCreateForm'])->name('books.show.create');
    Route::post('/panel/book', [BookController::class, 'handleCreate'])->name('books.create');
    
    Route::get('/panel/book/{book}/edit', [BookController::class, 'showUpdateForm'])->name('books.show.update');
    Route::put('/panel/book/{book}', [BookController::class, 'handleUpdate'])->name('books.update');
    
    Route::delete('/panel/book/{book}/delete', [BookController::class, 'handleDelete'])->name('books.delete');

    Route::get('/panel/book/{book}/approval', [BookController::class, 'showApproval'])->name('books.show.approval');
    Route::put('/panel/book/{book}/approval', [BookController::class, 'handleApproval'])->name('books.approval');


    Route::get('/panel/users', [UserController::class, 'index'])->name('users.index');
    Route::put('/users/{user}/block', [UserController::class, 'handleBlock'])->name('users.block');
    Route::put('/users/{user}/unblock', [UserController::class, 'handleUnblock'])->name('users.unblock');

    Route::get('/panel/profile', [UserController::class, 'showProfileForm'])->name('profile.show');
    Route::put('/panel/profile', [UserController::class, 'handleUpdateProfile'])->name('profile.update');

    Route::get('/panel/change-password', [UserController::class, 'showChangePasswordForm'])->name('change-password.show');
    Route::put('/panel/change-password', [UserController::class, 'handleChangePassword'])->name('change-password.update');

    Route::post('/logout', [AuthController::class, 'handleLogout'])->name('logout');
});