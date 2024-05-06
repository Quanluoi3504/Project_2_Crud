<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller {
    public function getAll() {
        $path = ("admin/category-list");

        $categories = DB::table("category")
            ->get();
        return view("admin/admin-index", [
            "path" => $path,
            "categories" => $categories,
        ]);
    }
    public function add() {
        $path = ("admin/category-add");

        return view("admin/admin-index", [
            "path" => $path,
        ]);
    }
    public function save(Request $request) {
        $categoryName = $request->categoryName;

        DB::table("category")
            ->insert([
                "category_name" => $categoryName,
            ]);

        return redirect("admin/category-list");
    }
    public function delete($id) {
        DB::table("category")
            ->where("id", $id)
            ->delete();

        return redirect("admin/category-list");
    }
    public function edit($id) {
        $path = ("admin/category-edit");

        $category = DB::table("category")
            ->where("id", $id)
            ->first();

        return view("admin/admin-index", [
            "path" => $path,
            "category" => $category,
        ]);
    }
    public function update(Request $request) {
        $id = $request->id;
        $categoryName = $request->categoryName;

        DB::table("category")
            ->where("id", $id)
            ->update([
                "category_name" => $categoryName,
            ]);

        return redirect("admin/category-list");
    }
}
