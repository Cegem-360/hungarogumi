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
Route::view('/szolgaltatasaink', 'pages.szolgaltatasaink')->name('szolháltatásaink');
Route::view('/hirek', 'pages.hirek')->name('hírek');
Route::view('/valtomeret-kalkulator', 'pages.valtomeret-kalkulator')->name('valtomeret-kalkulator');
Route::view('/et-kalkulator', 'pages.et-kalkulator')->name('et-kalkulator');
Route::view('/szallitasi-informaciok', 'pages.szallitasi-informaciok')->name('szallitasi-informaciok');
Route::view('/adatvedelmi-tajekoztato', 'pages.adatvedelmi-tajekoztato')->name('adatvedelmi-tajekoztato');
Route::view('/kapcsolat', 'pages.kapcsolat')->name('kapcsolat');
