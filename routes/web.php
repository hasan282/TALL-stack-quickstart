<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home');

Route::view('/login', 'pages.login')->name('login');
