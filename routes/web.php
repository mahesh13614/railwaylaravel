<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', function () {
    return view('sample', ['timestamp' => now()]);
})->name('sample');
