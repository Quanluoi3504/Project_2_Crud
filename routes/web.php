<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientIndexController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CilentProductDetailController;
use App\Http\Controllers\IndexController;


//Route::get('/', [ClientIndexController::class, "clientIndex"]);

Route::get('/admin', [AdminIndexController::class, "adminIndex"]);
Route::get('/',[HomeController::class, "ClientIndex"]);
Route::get('/product-detail/{id}',[CilentProductDetailController::class, "clientProductDetail"]);


require __DIR__.'/web_category.php';

require __DIR__.'/web_product.php';

require __DIR__.'/web_user.php';




