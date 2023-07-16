<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogNews;
use App\Models\BlogNewsPage;

class BlogNewsController extends Controller
{
    public function index(){
        $info = BlogNewsPage::first();
        $blogs = BlogNews::get();
        return view('blognews.index', compact('blogs','info'));
    }

    public function single($id){
        $singleblog = BlogNews::where('id',$id)->first();
        return view('blognews.single', compact('singleblog'));
    }
}
