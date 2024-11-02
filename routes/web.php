<?php

use App\Http\Middleware\Minifier;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')
    ->middleware(Minifier::class);

Route::view('/login', 'pages.login')
    ->middleware(Minifier::class)
    ->name('login');
