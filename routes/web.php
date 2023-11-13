<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ThankyouController;
use App\Http\Controllers\BlogPostsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\user\UserOrdersController;
use App\Http\Controllers\admin\AdminOrderController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminBlogPostController;
use App\Http\Controllers\admin\AdminCategoriesController;
use App\Http\Controllers\user\UserOrderDetailsController;
use App\Http\Controllers\admin\AdminAddCategoryController;
use App\Http\Controllers\Admin\AdminManualOrderController;
use App\Http\Controllers\admin\AdminBlogCategoryController;
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
Route::get('/about-us',[AboutUsController::class,'index'])->name('about_us');
Route::get('/contact-us',[ContactUsController::class,'index'])->name('contact');
Route::get('/product/{slug}',[ShopController::class,'productDetails'])->name('shop.product.details');
Route::put('/cart/update',[CartController::class,'updateCart'])->name('cart.update');
Route::delete('/cart/remove',[CartController::class,'removeItem'])->name('cart.remove');
Route::delete('/cart/clear',[CartController::class,'clearCart'])->name('cart.clear');
Route::get('/thank-you',[ThankyouController::class,'index'])->name('thankyou');
Route::get('/blog-post',[BlogPostsController::class,'index'])->name('user.blogpost');
Route::get('/blog-post/{slug}',[BlogPostsController::class,'postDetails'])->name('user.blogpost.details');

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
    Route::get('/admin/blog-categories',[AdminBlogCategoryController::class,'index'])->name('admin.blogcategories.index');
    Route::delete('/admin/blog-categories/{id}', [AdminBlogCategoryController::class, 'destroy'])->name('admin.blogcategories.destroy');
    Route::get('/admin/blog-categories/add',[AdminBlogCategoryController::class,'create'])->name('admin.blogcategories.create');
    Route::get('/admin/blog-categories/{id}/edit', [AdminBlogCategoryController::class, 'edit'])->name('admin.blogcategories.edit');
    Route::post('/admin/blog-categories/store', [AdminBlogCategoryController::class, 'store'])->name('admin.blogcategories.store');
    Route::put('/admin/blog-categories/{id}', [AdminBlogCategoryController::class, 'update'])->name('admin.blogcategories.update');
    Route::get('/admin/blog-post',[AdminBlogPostController::class,'index'])->name('admin.blogposts.index');
    Route::delete('/admin/blog-post/{id}', [AdminBlogPostController::class, 'destroy'])->name('admin.blogposts.destroy');
    Route::get('/admin/blog-post/add',[AdminBlogPostController::class,'create'])->name('admin.blogposts.create');
    Route::get('/admin/blog-post/{id}/edit', [AdminBlogPostController::class, 'edit'])->name('admin.blogposts.edit');
    Route::post('/admin/blog-post/store', [AdminBlogPostController::class, 'store'])->name('admin.blogposts.store');
    Route::put('/admin/blog-post/{id}', [AdminBlogPostController::class, 'update'])->name('admin.blogposts.update');


});
