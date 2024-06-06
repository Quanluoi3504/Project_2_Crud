<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function getAll() {
        $order = DB::table("order")
            ->get();
        return view("admin/order-list", [
            "order" => $order,
        ]);
    }
    public function filter($status) {
        $order = DB::table("order")
            ->where("status", $status)
            ->get();
        return view('order-list', [
            "order" => $order,
        ]);
    }
    public function orderUpdateStatus($id, $status) {
        DB::table("order")
            ->where("id", $id)
            ->update([
                "status" => $status
            ]);
        return redirect("admin/order-list");
    }
    public function statistic() {
        $result1 = DB::table("order")
            ->selectRaw("MONTH(created_at) month, SUM(total) revenue")
            ->where("status", "RECEIVED")
            ->groupByRaw("MONTH(created_at)")
            ->get();

        $obj1 = $result1[0];
        foreach ($result1 as $i => $obj) {
            if($obj1->revenue < $obj->revenue) {
                $obj1 = $obj;
            }
        }
        $result2 = DB::table("order")
            ->selectRaw("YEAR(created_at) year, SUM(total) revenue")
            ->where("status", "RECEIVED")
            ->groupByRaw("YEAR(created_at)")
            ->get();

        $obj2 = $result2[0];
        foreach ($result2 as $i => $obj) {
            if($obj2->revenue < $obj->revenue) {
                $obj2 = $obj;
            }
        }
        return view("/admin/AdminStatistic", [
            "obj1" => $obj1,
            "obj2" => $obj2
        ]);
    }
}
