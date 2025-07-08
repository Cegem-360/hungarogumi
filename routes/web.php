<?php

declare(strict_types=1);

use App\Http\Middleware\EnsureCartExists;
use App\Models\Product;
use App\Services\CartService;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/gumik', 'pages.tyres')->name('tyres');
Route::view('/felnik', 'pages.wheels')->name('wheels');
Route::prefix('termekek')->as('products.')->group(
    function (): void {
        Route::get('/', function () {
            return redirect()->route('home');
        })->name('index');

        Route::get('/{product}', function (Product $product) {
            $relatedProducts = [];

            return view('products.show', ['product' => $product, 'relatedProducts' => $relatedProducts]);
        })->name('show');
    }
);

Route::view('/rolunk', 'pages.rolunk')->name('rolunk');
Route::view('/szolgaltatasaink', 'pages.szolgaltatasaink')->name('szolháltatásaink');
Route::view('/hirek', 'pages.hirek')->name('hírek');
Route::view('/valtomeret-kalkulator', 'pages.valtomeret-kalkulator')->name('valtomeret-kalkulator');
Route::view('/et-kalkulator', 'pages.et-kalkulator')->name('et-kalkulator');
Route::view('/szallitasi-informaciok', 'pages.szallitasi-informaciok')->name('szallitasi-informaciok');
Route::view('/adatvedelmi-tajekoztato', 'pages.adatvedelmi-tajekoztato')->name('adatvedelmi-tajekoztato');
Route::view('/kapcsolat', 'pages.kapcsolat')->name('kapcsolat');

Route::middleware([EnsureCartExists::class])->group(function () {
    // Add routes here that require the ensureCartExist middleware
    Route::view('/kosar', 'cart.index')->name('cart.index');
    // Cart add route using CartService
    Route::post('/cart/add', function (Illuminate\Http\Request $request, CartService $cartService) {
        $cartService->addItem($request->product_id, $request->quantity);

        return redirect()->back();
    })->name('cart.add');
});
