<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::view('/', 'index')->name('home');
Route::view('/gumik', 'index')->name('gumik');
Route::view('/felnik', 'index')->name('felnik');
Route::view('/rolunk', 'index')->name('rolunk');
Route::view('/kapcsolat', 'index')->name('kapcsolat');
