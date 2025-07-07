<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/gumik', 'pages.tyres')->name('tyres');
Route::view('/felnik', 'pages.wheels')->name('wheels');
Route::prefix('termekek')->as('products.')->group(
    function () {
        Route::get('/', function () {
            return view('products.index');
        })->name('index');

        Route::get('/{product}', function ($product) {
            return view('products.show', ['product' => $product]);
        })->name('show');
    }
);
Route::view('/termek', 'products.index')->name('termékek');

Route::view('/rolunk', 'pages.rolunk')->name('rolunk');
Route::view('/kapcsolat', 'index')->name('kapcsolat');
