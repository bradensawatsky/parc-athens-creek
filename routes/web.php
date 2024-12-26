<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/lifestyle', function () {
    return view('lifestyle');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/suites', function () {
    return view('suites');
});
