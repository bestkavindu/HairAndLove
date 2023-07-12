<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogNewsController extends Controller
{
    public function index(){

        return view('blognews.index');
    }
}
