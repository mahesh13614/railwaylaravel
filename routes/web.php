<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', [App\Http\Controllers\SampleController::class, 'index'])->name('sample');
