<?php

use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\Auth\RegisterController;
use App\Http\Controllers\Frontend\Auth\ResetPasswordController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\Dashboard\CartController;
use App\Http\Controllers\Frontend\Dashboard\CheckoutController;
use App\Http\Controllers\Frontend\Dashboard\DashboardController;
use App\Http\Controllers\Frontend\Dashboard\OrderController;
use App\Http\Controllers\Frontend\Dashboard\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/shop/{gender?}/{category?}', [ShopController::class, 'index'])
    ->name('shop');

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class, 'index'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/register', [RegisterController::class, 'index'])
        ->name('register');

    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/forgot-password', [ResetPasswordController::class, 'index'])
        ->name('forgot-password');
});


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/cart', [CartController::class, 'index'])
        ->name('user.cart');

    Route::get('/user/checkout', [CheckoutController::class, 'index'])
        ->name('user.checkout');

    Route::get('/user/dashboard', [DashboardController::class, 'index'])
        ->name('user.dashboard');

    Route::get('/user/order', [OrderController::class, 'index'])
        ->name('user.order');

    Route::get('/user/profile', [ProfileController::class, 'index'])
        ->name('user.profile');

    Route::delete('/logout', [LoginController::class, 'destroy'])
        ->name('logout');
});

require __DIR__ . '/admin.php';
