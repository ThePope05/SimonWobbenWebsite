<?php

use Illuminate\Support\Facades\Route;

//Middlewares
use App\Http\Middleware\Authenticate;

//Controllers
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', [ProfileController::class, 'dashboard'])->middleware(Authenticate::class)->name('dashboard');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::middleware('auth')->group(function () {
    Route::get('/posts/create', function () {
        return view('posts.create');
    })->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/user/{user}', [PostController::class, 'userPosts'])->name('posts.show.user');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::patch('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group([], function () {
    Route::get('/general/no_access_page', function () {
        return view('general.pleaseLogin');
    })->name('general.no_access_page');
});

require __DIR__ . '/auth.php';
