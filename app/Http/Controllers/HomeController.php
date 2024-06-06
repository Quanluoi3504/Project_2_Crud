<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function clientIndex() {
        $path = ("/");
        $products = DB::table("products")
            ->get();
        $web_information = DB::table('web_information')
            ->get();
        return view("client/ClientIndex", [
            "path"=>$path,
            "products" => $products,
            "web_information" => $web_information
        ]);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/');
    }

}
