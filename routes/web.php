<?php

declare(strict_types=1);

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\EnsureCartExists;
use App\Http\Middleware\EnsureCartNotEmpty;
use App\Models\Product;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/gumik', 'pages.tyres')->name('tyres');
Route::view('/felnik', 'pages.wheels')->name('wheels');
Route::view('/kereses', 'pages.search')->name('search');
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
Route::view('/szolgaltatasaink', 'pages.szolgaltatasaink')->name('services');
Route::view('/hirek', 'pages.hirek')->name('news');
Route::view('/valtomeret-kalkulator', 'pages.valtomeret-kalkulator')->name('valtomeret-kalkulator');
Route::view('/et-kalkulator', 'pages.et-kalkulator')->name('et-kalkulator');
Route::view('/szallitasi-informaciok', 'pages.szallitasi-informaciok')->name('szallitasi-informaciok');
Route::view('/adatvedelmi-tajekoztato', 'pages.adatvedelmi-tajekoztato')->name('adatvedelmi-tajekoztato');
Route::view('/kapcsolat', 'pages.kapcsolat')->name('kapcsolat');

// Auth routes
Route::middleware('guest')->group(function () {
    Route::get('/belepes', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/belepes', [AuthController::class, 'login']);
    Route::get('/regisztracio', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/regisztracio', [AuthController::class, 'register']);
});

Route::post('/kilepes', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Profile routes
Route::middleware('auth')->prefix('profil')->as('profile.')->group(function () {
    Route::get('/rendelesek', [ProfileController::class, 'orders'])->name('orders');
    Route::get('/adatok', [ProfileController::class, 'profile'])->name('profile');
});

Route::middleware([EnsureCartExists::class])->group(function (): void {
    // Add routes here that require the ensureCartExist middleware
    Route::get('/kosar', function () {
        // You can pass the cart service to the view if needed
        return view('pages.cart');
    })->name('cart.index');

    // Cart add route using CartService
    Route::post('/cart/add', function (Request $request, CartService $cartService) {
        $cartService->addItem($request->product_id, $request->quantity);

        return redirect()->back();
    })->name('cart.add');
});

Route::middleware([EnsureCartExists::class])->group(function (): void {

    // Success and cancel pages do not require cart not empty
    Route::get('/checkout/success', function () {
        return view('pages.checkout-success');
    })->name('checkout.success');

    Route::get('/checkout/cancel', function () {
        return view('pages.checkout-cancel');
    })->name('checkout.cancel');
    // Checkout pages except success
    Route::middleware([EnsureCartNotEmpty::class])->group(function (): void {
        // Checkout page
        Route::get('/checkout', function () {
            return view('pages.checkout');
        })->name('checkout.index');

    });
});
