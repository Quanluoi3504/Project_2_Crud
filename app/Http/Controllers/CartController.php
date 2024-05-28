<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller {
    public function getAll() {
        $path = ("/cart");
        $products = DB::table("products")
            ->get();
        $web_information = DB::table('web_information')
            ->get();

        return view("client/ClientIndex", [
            "path" => $path,
            "products" => $products,
            "web_information" => $web_information
        ]);
    }
}
