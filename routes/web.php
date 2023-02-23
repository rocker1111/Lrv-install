<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return "Hello";
    return view('welcome');
});

Route::get('/test', function(){
    return "Welcome to my page";
});
Route::get('/about', 'App\Http\Controllers\HomeController@index');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact');
