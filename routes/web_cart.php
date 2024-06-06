<?php

use Illuminate\Support\Facades\Route;

Route::get('/cart', [\App\Http\Controllers\CartController::class, "getAll"]);





