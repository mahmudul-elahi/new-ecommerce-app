<?php

use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/admin', [LoginController::class, 'index'])
        ->name('admin.login');

    Route::post('/admin', [LoginController::class, 'store']);
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/admin/category', 'index')
            ->name('admin.category.index');

        Route::get('/admin/category/create', 'create')
            ->name('admin.category.create');

        Route::post('/admin/category/store', 'store')
            ->name('admin.category.store');

        Route::get('/admin/category/edit/{id}', 'edit')
            ->name('admin.category.edit');

        Route::put('/admin/category/update/{id}', 'update')
            ->name('admin.category.update');
    });


    Route::controller(ProductController::class)->group(function () {
        Route::get('/admin/product', 'index')
            ->name('admin.product.index');

        Route::get('/admin/product/create', 'create')
            ->name('admin.product.create');

        Route::post('/admin/product/store', 'store')
            ->name('admin.product.store');
    });

    Route::delete('/logout', [LoginController::class, 'destroy'])->name('admin.logout');
});
