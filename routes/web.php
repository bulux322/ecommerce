<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ThankyouController;
use App\Http\Controllers\user\UserOrdersController;
use App\Http\Controllers\admin\AdminOrderController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminCategoriesController;
use App\Http\Controllers\user\UserOrderDetailsController;
use App\Http\Controllers\admin\AdminAddCategoryController;
use App\Http\Controllers\Admin\AdminManualOrderController;
use App\Http\Controllers\admin\AdminOrderDetailsController;

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
Route::put('/cart/update',[CartController::class,'updateCart'])->name('cart.update');
Route::delete('/cart/remove',[CartController::class,'removeItem'])->name('cart.remove');
Route::delete('/cart/clear',[CartController::class,'clearCart'])->name('cart.clear');
Route::get('/thank-you',[ThankyouController::class,'index'])->name('thankyou');

Route::get('/checkout',[CheckoutController::class,'index'])->middleware('auth')->name('checkout.index');
Route::get('/cart',[CartController::class,'index'])->middleware('auth')->name('cart.index');
Route::post('/cart/store',[CartController::class,'addToCart'])->middleware('auth')->name('cart.store');
Route::post('/checkout/place-order',[CheckoutController::class,'placeOrder'])->middleware('auth')->name('checkout.placeorder');

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('/my-account',[UserController::class,'index'])->name('user.index');
    Route::get('/user/orders',[UserOrdersController::class,'index'])->name('user.orders');
    Route::get('/user/orders/{order_id}',[UserOrderDetailsController::class,'index'])->name('user.orderdetails');
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
    Route::get('/admin/products/{id}/edit', [AdminProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/admin/products/{id}', [AdminProductController::class, 'update'])->name('admin.product.update');
    Route::get('/admin/orders', [AdminOrderController::class, 'index'])->name('admin.orders');
    Route::get('/admin/orders/{order_id}', [AdminOrderDetailsController::class, 'orderDetails'])->name('admin.orderdetails');
    Route::get('/admin/export-orders', [AdminOrderController::class, 'exportOrders'])->name('admin.exportOrders');
    Route::get('/admin/manual-order/create', [AdminManualOrderController::class, 'create'])->name('admin.mcheckout.create');
    Route::post('/admin/manual-order/store', [AdminManualOrderController::class, 'store'])->name('admin.manual-order.store');
});
