<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashBoardController extends Controller {
    public function dashBoard() {
      $path = ("admin/dash-board");
        return view("admin/admin-index", [
            "path" => $path,
        ]);
    }
}
