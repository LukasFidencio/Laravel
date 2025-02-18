<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/oi', function () {
    echo "welcome";
});

Route::get('/about', function () {
    echo "sobre nózes.";
});