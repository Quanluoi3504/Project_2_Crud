<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminIndexController extends Controller {
    public function adminIndex() {
//        // SELECT * FROM category
//        $path = "";
//        $categories = DB::table("category")
//            ->get();

        return view("admin/admin-index-redirect", [
//            "path" => $path,
//            "categories" => $categories,
        ]);
    }
}
