<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $my_name = "Moni Sarkar";
        //return view('home.index',['name' => $name]); 
        $this->data = [
            'name' => $my_name,
            'roll' => 1234,
            'subject' => ['bangla','english','math']
        ];
        return view('home.index', $this->data); 
    }

    function contact(){
        return view('home.contact'); 
    }
}
