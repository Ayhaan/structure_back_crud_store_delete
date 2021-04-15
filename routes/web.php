<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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

//PARTIE FRONTEND
Route::get('/', [AllController::class, 'home'])->name('home');
Route::get('/about', [AllController::class, 'about'])->name('about');
Route::get('/product', [AllController::class, 'product'])->name('product');
Route::get('/store', [AllController::class, 'store'])->name('store');



//PARTIE BACKEND
Route::get('/admin/home', function() {
    return view('backoffice.home');
})->name('admin.home');


//Partie PRODUCT
    //CRUD ->read
Route::get('/admin/product', [ProductController::class, 'index'])->name('products.index');
    //CRUD ->create
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/admin/store', [ProductController::class, 'store'])->name('products.store');

    //CRUD ->delete/destroy
Route::delete('/admin/product/{id}/delete', [ProductController::class, 'destroy'])->name('products.destroy');






