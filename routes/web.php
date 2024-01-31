<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OngkirController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;

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


Route::get('/email', [EmailController::class, 'create']);
Route::post('/email', [EmailController::class, 'sendEmail'])->name('send.email');

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/shop/{slug?}', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/tag/{slug?}', [ShopController::class, 'tag'])->name('shop.tag');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product.show');

// react route
Route::get('products/{slug?}', [ShopController::class, 'getProducts']);
Route::get('products', [HomeController::class, 'getProducts']);
Route::get('product-detail/{product:slug}', [ProductController::class, 'getProductDetail']);
Route::post('carts', [CartController::class, 'store']);
Route::get('carts', [CartController::class, 'showCart']);
// ongkir
Route::get('api/provinces', [OngkirController::class, 'getProvinces']);
Route::get('api/cities', [OngkirController::class, 'cities']);
Route::get('api/shipping-cost', [OngkirController::class, 'shippingCost']);
Route::post('api/set-shipping', [OngkirCzontroller::class, 'setShipping']);
Route::post('api/checkout', [OrderController::class, 'checkout']);
// get user login
Route::get('api/users', [UserController::class, 'index']);
// ==========
Route::get('/contact',[contactController::class,'index']);
Route::get('/About',[AboutController::class,'index']);
Route::group(['middleware' => 'auth'], function() {
    
    Route::get('/order/checkout', [OrderController::class, 'process'])->name('checkout.process');
    Route::resource('/cart', CartController::class)->except(['store', 'show']);

    Route::group(['middleware' => ['isAdmin'],'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
       
        // categories
        Route::resource('categories', CategoryController::class);
        Route::post('categories/images', [CategoryController::class,'storeImage'])->name('categories.storeImage');
    
        // tags
        Route::resource('tags', TagController::class);
    
        // products
        Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
        Route::post('products/images', [\App\Http\Controllers\Admin\ProductController::class,'storeImage'])->name('products.storeImage');
    });
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
