<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TradeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/inventory', [DashboardController::class, 'index'])->name('inventory.index');

    // Detailpagina van een item
    Route::get('/inventory/{id}', [DashboardController::class, 'show'])->name('inventory.show');

    // Trade routes
    Route::get('/trades', [TradeController::class, 'index'])->name('trades.index');

    Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
    Route::post('/shop/buy/{itemId}', [ShopController::class, 'addToInventory'])->name('shop.buy')->middleware('auth');

    // Profiel routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
