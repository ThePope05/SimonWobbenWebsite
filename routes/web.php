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
