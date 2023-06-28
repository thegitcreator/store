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


Route::get('/', [MainController::class, 'showHome']);


Route::prefix('categories')->group(function () {
    Route::get('/', [MainController::class, 'showCategories']);
});

Route::get('/{category}', [MainController::class, 'showCategory']);

Route::prefix('mobiles')->group(function () {
    Route::get('/{product?}', [MainController::class, 'showProduct']);
});
