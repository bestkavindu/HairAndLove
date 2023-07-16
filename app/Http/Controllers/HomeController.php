<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\GenaralInfo;
use App\Models\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $info = GenaralInfo::first();
        $homeinfo = Home::first();
        $products = Product::paginate(3);
        return view('home',compact('products','info', 'homeinfo'));
    }
}
