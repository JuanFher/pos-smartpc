<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/demo', function () {
    return view('demo');
})->middleware(['auth'])->name('demo');

require __DIR__.'/auth.php';
