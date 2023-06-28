<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MainController::class, 'showHome'])->name('index');


Route::prefix('categories')->group(function () {
    Route::get('/', [MainController::class, 'showCategories'])->name('categories');
});

Route::prefix('/{category}')->group(function () {
    Route::get('/', [MainController::class, 'showCategory'])->name('category');
    Route::get('/{product?}', [MainController::class, 'showProduct'])->name('product');
});

Route::get('/basket', [MainController::class, 'basket'])->name('basket');

Route::get('/order', [MainController::class, 'makeOrder'])->name('order');
