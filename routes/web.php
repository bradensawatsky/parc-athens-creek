<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/lifestyle', function () {
    return view('lifestyle');
});
