<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicePage;

class ServicesController extends Controller
{
    public function index(){
       $info = ServicePage::first();
        return view('services.index', compact('info'));
    }
}
