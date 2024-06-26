<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile() {
        $path = ("user/profile");
        $web_information = DB::table('web_information')
            ->get();
        return view("client/ClientIndex", [
            "path"=>$path,
            "web_information" => $web_information
        ]);
    }
}
