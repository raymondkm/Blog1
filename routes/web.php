<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductController;

Route::get('product-list', [ProductController::class, 'index']);
Route::get('product-list/{id}/edit', [ProductController::class, 'edit']);
Route::post('product-list/store', [ProductController::class, 'store']);
Route::get('product-list/delete/{id}', [ProductController::class, 'destroy']);
