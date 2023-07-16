<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogNews;

class BlogNewsController extends Controller
{
    public function index(){
        $blogs = BlogNews::get();
        return view('blognews.index', compact('blogs'));
    }

    public function single($id){
        $singleblog = BlogNews::where('id',$id)->first();
        return view('blognews.single', compact('singleblog'));
    }
}
