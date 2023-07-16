<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;

class AboutController extends Controller
{
    public function index(){
       $info = AboutPage::first();
        return view('about.index',compact('info'));
    }
}
