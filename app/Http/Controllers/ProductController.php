<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller{
    public function getAll(){
        $path = ("admin/product-list");

//        SELECT * FROM product JOIN product category ON category.id = category.
        $product = DB::table("products")
            ->join("category", "category.id", "=", "products.category_id")
            ->join("type", "type.id", "=", "products.type_id")
            ->select("products.*", "category.category_name", "type.type_name")
            ->get();
        return view("admin/admin-index", [
            "path" => $path,
            "product" => $product
        ]);
    }
    public function add() {
        $path = ("admin/product-add");

        $categories = DB::table("category")
            ->get();
        $types = DB::table("type")
            ->get();

        return view("admin/admin-index", [
            "path" => $path,
            "categories" => $categories,
            "types" => $types,
        ]);
    }
    public function save(Request $request) {
        $productName = $request->productName;
        $price = $request->price;
        $description = $request->description;
        $categoryId = $request->categoryId;
        $typeId = $request->typeId;
        $imageName = "";
        if ($request->image != null) {

            $imageName = $request->image->getClientOriginalName();

            $request->image->move(public_path("image_product"), $imageName);
        }

        DB::table("products")
            ->insert([
                "product_name" => $productName,
                "price" => $price,
                "description" => $description,
                "image" => $imageName,
                "category_id" => $categoryId,
                "type_id" => $typeId,
            ]);

        return redirect("admin/product-list");
    }
    public function delete($id) {
        DB::table("products")
            ->where("id", $id)
            ->delete();

        return redirect("admin/product-list");
    }
    public function edit($id) {
        $path = ("admin/product-edit");

        $product = DB::table("products")
            ->where("id", $id)
            ->first();

        $categories = DB::table("category")
            ->get();
        $type = DB::table("type")
            ->get();

        return view("admin/admin-index", [
            "path" => $path,
            "product" => $product,
            "categories" => $categories,
            "type" => $type,
        ]);
    }
    public function update(Request $request) {
        $id = $request->id;
        $productName = $request->productName;
        $price = $request->price;
        $description = $request->description;
        $categoryId = $request->categoryId;
        $typeId = $request->typeId;
        $imageName = "";
        if ($request->image!= null) {
            $imageName = $request->image->getClientOriginalName();

            $request->image->move(public_path("image_product"), $imageName);
        }

        DB::table("products")
            ->where("id", $id)
            ->update([
                "product_name" => $productName,
                "price" => $price,
                "description" => $description,
                "image" => $imageName,
                "category_id" => $categoryId,
                "type_id" => $typeId,
            ]);

        return redirect("admin/product-list");
    }
}
