<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller {
    public function addToCart($id, $quantity) {
        $product = DB::table('products')
            ->where('id', $id)
            ->first();
        $product->quantity = $quantity;
        $cart = $product;

        Session::push("cart", $cart);

        return redirect("/product-detail/".$id);
    }

    public function cart()
    {
//        delete cart
//        Session::forget("cart");
//        Session::flush();
//        Session::save();

        $cart = Session::get("cart");
//        dd($cart);
        return view("/client/ShowCart", [
            "cart" => $cart
        ]);
    }
}
