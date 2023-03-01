<?php

use App\Http\Controllers\ProductController;
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

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/addproduct', [ProductController::class, 'addproduct'])->name('addproduct');
Route::post('/insertproduct', [ProductController::class, 'insertproduct'])->name('insertproduct');
Route::get('editproduct/{product:id}', [ProductController::class, 'editproduct'])->name('editproduct');
Route::put('updateproduct/{product:id}', [ProductController::class, 'updateproduct'])->name('updateproduct');
Route::delete('deleteproduct/{product:id}', [ProductController::class, 'deleteproduct'])->name('deleteproduct');
