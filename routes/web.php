<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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


Route::resource('product', ProductController::Class);

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/create_product', [ProductController::class, 'create'])->name('create_product');
Route::get('/edit_product/{id}', [ProductController::class, 'edit'])->name('edit_product');
Route::get('/view_product/{id}', [ProductController::class, 'getDetails'])->name('view_product');
Route::delete('/delete_product/{id}', [ProductController::class, 'delete'])->name('delete_product');
