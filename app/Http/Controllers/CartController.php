<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
        $web_information = DB::table('web_information')
            ->get();
        return view("/client/ShowCart", [
            "cart" => $cart,
            "total" => $total,
            "web_information" => $web_information
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

    public function cartCheckout(Request $request)
    {
        {
            $fullName = $request->fullName;
            $address = $request->address;
            $phone = $request->phone;

            $total = $request->total;
            $status = "PENDING";

            $id = DB::table('order')
                //insert: chi insert vao db
                //insertGetId: insert va tra ve id
                ->insertGetId([
                    "fullName" => $fullName,
                    "address" => $address,
                    "phone" => $phone,
                    "total" => $total,
                    "status" => $status,
                    "created_at" => Carbon::now()
                ]);
        }

        //thêm vào bảng order_detail
        {
            $cart = Session::get("cart");
            foreach ($cart as $obj) {
                DB::table('order_detail')
                    ->insert([
                        "order_id" => $id,
                        "product_id" => $obj->id,
                        "quantity" => $obj->quantity,
                        "price" => $obj->price,
                    ]);
            }
        }
        //xóa giỏ hàng
//        {
//            Session::forget("cart");
//            Session::flush();
//            Session::save();
//        }

        $web_information = DB::table('web_information')
            ->get();
        return view("client/CartCheckoutSuccess", [
            "web_information" => $web_information
        ]);
    }
}
