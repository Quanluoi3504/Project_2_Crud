<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{
    public function getAll(){
        $path = ("admin/user-list");
        $user = DB::table("users")
            ->get();
        return view("admin/admin-index", [
            "path" => $path,
            "user" => $user,
        ]);
    }
    public function add() {
        $path = ("admin/user-add");
        return view("admin/admin-index", [
            "path" => $path,
        ]);
    }
//    public function save(Request $request) {
//        $productName = $request->productName;
//        $price = $request->price;
//        $description = $request->description;
//        $categoryId = $request->categoryId;
//        $imageName = "";
//        if ($request->image != null) {
//
//            $imageName = $request->image->getClientOriginalName();
//
//            $request->image->move(public_path("image_product"), $imageName);
//        }
//
//        DB::table("products")
//            ->insert([
//                "product_name" => $productName,
//                "price" => $price,
//                "description" => $description,
//                "image" => $imageName,
//                "category_id" => $categoryId,
//            ]);
//
//        return redirect("admin/product-list");
//    }
    public function delete($id) {
        DB::table("users")
            ->where("id", $id)
            ->delete();

        return redirect("admin/user-list");
    }
//    public function edit($id) {
//        $path = ("admin/product-edit");
//
//        $product = DB::table("products")
//            ->where("id", $id)
//            ->first();
//
//        $categories = DB::table("category")
//            ->get();
//
//        return view("admin/admin-index", [
//            "path" => $path,
//            "product" => $product,
//            "categories" => $categories,
//        ]);
//    }
//    public function update(Request $request) {
//        $id = $request->id;
//        $productName = $request->productName;
//        $price = $request->price;
//        $description = $request->description;
//        $categoryId = $request->categoryId;
//        $imageName = "";
//        if ($request->image!= null) {
//            $imageName = $request->image->getClientOriginalName();
//
//            $request->image->move(public_path("image_product"), $imageName);
//        }
//
//        DB::table("products")
//            ->where("id", $id)
//            ->update([
//                "product_name" => $productName,
//                "price" => $price,
//                "description" => $description,
//                "image" => $imageName,
//                "category_id" => $categoryId,
//            ]);
//
//        return redirect("admin/product-list");
//    }
}
