<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\MenuItemController;

// Публичные маршруты
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');

// Админские маршруты с простой защитой паролем (всплывающее окно)
Route::middleware(['web', 'auth.basic'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('menu-items', MenuItemController::class);
});