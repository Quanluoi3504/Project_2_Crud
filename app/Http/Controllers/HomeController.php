<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function clientIndex() {
        $products = DB::table("products")
            ->get();
        $web_information = DB::table('web_information')
            ->get();
        return view("client/ClientIndex", [
            "products" => $products,
            "web_information" => $web_information
        ]);
    }
}
