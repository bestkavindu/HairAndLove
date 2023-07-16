<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactPage;

class ContactController extends Controller
{
    public function index(){
       $info = ContactPage::first();
        return view('contact.index',compact('info'));
    }
}
