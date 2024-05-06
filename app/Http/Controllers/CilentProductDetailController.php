<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CilentProductDetailController extends Controller
{
    public function clientProductDetail($id) {
        $product = DB::table('products')
            ->where('id', $id)
            ->first();
        $productRelated = DB::table('products')
            ->where('id', "!=", $id)
            ->get();
        return view("client/clientProductDetail", [
            "product" => $product,
            "productRelated" => $productRelated
        ]);
    }

}

