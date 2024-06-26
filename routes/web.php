<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientIndexController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CilentProductDetailController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;


//Route::get('/', [ClientIndexController::class, "clientIndex"]);

Route::get('/admin', [AdminIndexController::class, "adminIndex"]);
Route::get('/admin/dash-board', [\App\Http\Controllers\DashBoardController::class, "dashBoard"]);
Route::get('/',[HomeController::class, "ClientIndex"]);
Route::get('/product-detail/{id}',[CilentProductDetailController::class, "clientProductDetail"]);
//Route::get('/product-detail/update/{type}/{id}/{quantity}', [CilentProductDetailController::class,"quantityUpdate"]);



require __DIR__.'/web_category.php';

require __DIR__.'/web_product.php';

require __DIR__.'/web_user.php';

require __DIR__.'/web_cart.php';

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#cart
Route::get('/add-to-cart/{id}/{quantity}', [CartController::class,"addToCart"]);
Route::get('/cart', [CartController::class,"cart"]);
Route::get('/cart/remove', [CartController::class,"cartRemove"]);
Route::get('/cart/update/{type}/{id}/{quantity}', [CartController::class,"cartUpdate"]);
Route::post('/cart/checkout', [CartController::class,"cartCheckOut"]);
Route::get('/cart/success', [CartController::class,"CartCheckoutSuccess"]);

Route::get('/user/profile', [ProfileController::class, "profile"]);

Route::get('/admin/order-list', [OrderController::class, "getAll"]);
Route::get('/admin/order-list/{status}', [OrderController::class, "filter"]);
Route::get('/admin/order-update-status/{id}/{status}', [OrderController::class, "orderUpdateStatus"]);
Route::get('/admin/order-details/{id}', [OrderController::class, "OrderDetails"]);

Route::get('/admin/statistic', [OrderController::class, "statistic"]);

