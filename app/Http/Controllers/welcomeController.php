<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index(){
return view('master.home.home');
    }
    public function about(){
return view('master.about.about');
    }
    public function blog(){
return view('master.blog.blog');
    }
    public function details(){
return view('master.details.details');
    }
    public function contact(){
return view('master.contact.contact');
    }
}
