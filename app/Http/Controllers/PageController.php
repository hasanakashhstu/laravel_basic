<?php

namespace App\Http\Controllers;
use App\Models\page;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index(){
  //  echo 'hello';
  $pages = page::all();
  return view('page',['page' => $pages]);
  }
}
