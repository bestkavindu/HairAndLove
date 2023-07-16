<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductsPage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $info = ProductsPage::first();
        $products = Product::get();
        return view('product.index',compact('products','info'));
    }
}
