<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $name = "Moni sarkar hridoy";
        $data = ['name' => $name];
        return view('home.index', $data); 
    }

    function contact(){
        return view('home.contact'); 
    }
}
