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
        if($cart == null) {
            $cart = [];
        }

        $total = 0;
        foreach ($cart as $index => $obj) {
            $total += $obj->price * $obj->quantity;
        }
        return view("/client/ShowCart", [
            "cart" => $cart,
            "total" => $total
        ]);
    }
    public function cartRemove() {
        Session::forget("cart");
        Session::flush();
        Session::save();

        return redirect("/cart");
    }

    public function cartUpdate($type, $id, $quantity) {
        $cart = Session::get("cart");

        foreach ($cart as $index => $obj) {

            if($obj->id == $id && $type == "plus") {
                $obj->quantity = $quantity + 1;
            }
            if($obj->id == $id && $type == "minus") {
                if ($quantity > 1) {
                    $obj->quantity = $quantity - 1;
                } else if($quantity == 1) {
                    unset($cart[$index]);
                }
            }
        }
        Session::put("cart", $cart);
//        dd($cart);

        return redirect("/cart");
    }
}
