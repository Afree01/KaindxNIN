<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Registrasi
Route::get('/register', [App\Http\Controllers\Auth\AuthController::class, 'showRegist'])->name('regist.show');
Route::post('/register', [App\Http\Controllers\Auth\AuthController::class, 'regist'])->name('regist.post');

// Login
Route::get('/login', [App\Http\Controllers\Auth\AuthController::class, 'showLogin'])->name('login.show');
Route::post('/login', [App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login.post');

// Logout
Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category');
    Route::post('/category', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.categoryStore');

    Route::get('/type', [App\Http\Controllers\Admin\TypeController::class, 'index'])->name('admin.type');
    Route::post('/type', [App\Http\Controllers\Admin\TypeController::class, 'store'])->name('admin.typeStore');

    Route::get('/location', [App\Http\Controllers\Admin\LocationController::class, 'index'])->name('admin.location');
    Route::post('/location', [App\Http\Controllers\Admin\LocationController::class, 'store'])->name('admin.locationStore');

    Route::get('/color', [App\Http\Controllers\Admin\ColorController::class, 'index'])->name('admin.color');
    Route::post('/color', [App\Http\Controllers\Admin\ColorController::class, 'store'])->name('admin.colorStore');
    Route::get('/color/{productId}', [App\Http\Controllers\Admin\ColorController::class, 'getColorsByProduct'])->name('admin.colorByProduct');

    Route::get('/product', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.product');
    Route::post('/product', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.productStore');

    Route::get('/productDetail/{productId}', [App\Http\Controllers\Admin\ProductController::class, 'showDetail'])->name('admin.productDetail');
    Route::post('/productDetail/{productId}', [App\Http\Controllers\Admin\ProductController::class, 'storeDetail'])->name('admin.productDetailStore');

    Route::get('/transaction', [App\Http\Controllers\Admin\TransactionController::class, 'index'])->name('admin.transaction');
    Route::post('/transaction/{move}', [App\Http\Controllers\Admin\TransactionController::class, 'store'])->name('admin.transactionStore');

    Route::get('/reportStockMovement', [App\Http\Controllers\Admin\TransactionController::class, 'reportStockMovement'])->name('report.stockMovement');
});
