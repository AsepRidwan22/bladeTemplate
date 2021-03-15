<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeControllers extends Controller
{
  public function index(){
    return view('pages.home', ['name' => 'asep']);
  }

  public function about(){
    return view('pages.about');
  }

  public function contact(){
    return view('pages.contact');
  }
}
