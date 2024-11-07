<?php

use App\Http\Middleware\Minifier;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'pages.home')
//     ->middleware(Minifier::class);

Route::get('/', fn() => view('pages.home'))->middleware(Minifier::class);

Route::middleware([Minifier::class, 'guest'])->group(function () {

    Route::view('/login', 'pages.login')->name('login');
});

Route::middleware([Minifier::class, 'auth'])->group(function () {

    Route::view('/dashboard', 'pages.dashboard')->name('dashboard');
});
