<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Middlewares
use App\Http\Middleware\Authenticate;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(Authenticate::class)->name('dashboard');

Route::get('/blogs', function () {
    return view('blogs.index');
})->name('blogs.index');

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
