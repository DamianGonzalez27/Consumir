<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){

      return view('home');
    }
    public function crud(){
      return view('crud');
    }
    public function consumir(){
      return view('consumir');
    }
}
