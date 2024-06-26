<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CilentProductDetailController extends Controller
{
    public function clientProductDetail($id) {
        $product = DB::table('products')
//            ->join("category", "category.id", "=", "products.category_id")
//            ->select("products.*", "category.category_name")
            ->where('id', $id)
            ->first();
        $productRelated = DB::table('products')
            ->join("category", "category.id", "=", "products.category_id")
            ->select("products.*", "category.category_name")
//            ->where('id', "!=", $id)
            ->get();
        $web_information = DB::table('web_information')
            ->get();
        return view("client/clientProductDetail", [
            "product" => $product,
            "productRelated" => $productRelated,
            "web_information" => $web_information
        ]);
    }

}

