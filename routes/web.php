<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminCategoriesController;
use App\Http\Controllers\admin\AdminAddCategoryController;

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

Route::get('/',[AppController::class,'index'])->name('app.index');
Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/product/{slug}',[ShopController::class,'productDetails'])->name('shop.product.details');
//Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::get('/cart',[CartController::class,'index'])->middleware('auth')->name('cart.index');
Route::post('/cart/store',[CartController::class,'addToCart'])->name('cart.store');
Route::put('/cart/update',[CartController::class,'updateCart'])->name('cart.update');
Route::delete('/cart/remove',[CartController::class,'removeItem'])->name('cart.remove');
Route::delete('/cart/clear',[CartController::class,'clearCart'])->name('cart.clear');

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('/my-account',[UserController::class,'index'])->name('user.index');
});
Route::middleware('auth','auth.admin')->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
    Route::get('/admin/categories',[AdminCategoriesController::class,'index'])->name('admin.categories');
    Route::get('/admin/categories/add',[AdminAddCategoryController::class,'render'])->name('admin.category.add');
    Route::post('/admin/categories/storeCategory', [AdminAddCategoryController::class, 'storeCategory'])->name('admin.categories.storeCategory');
    Route::get('/admin/categories/{id}/edit', [AdminCategoriesController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/admin/categories/{id}', [AdminCategoriesController::class, 'update'])->name('admin.categories.update');
    Route::delete('/admin/categories/{id}', [AdminCategoriesController::class, 'destroy'])->name('admin.categories.destroy');
    Route::get('/admin/products',[AdminProductController::class,'index'])->name('admin.product');
    Route::get('/admin/products/add',[AdminProductController::class,'create'])->name('admin.product.add');
    Route::post('/admin/products/store', [AdminProductController::class,'store'])->name('admin.product.store');
    Route::delete('/admin/products/{id}', [AdminProductController::class, 'destroy'])->name('admin.product.destroy');
});
