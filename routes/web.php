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
Route::get('/create-user', 'App\Http\Controllers\UserController@create');

Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/users/{id}', 'App\Http\Controllers\UserController@show');
Route::get('/users/{id}/edit', 'App\Http\Controllers\UserController@edit');
Route::get('/users/{id}/delete', 'App\Http\Controllers\UserController@delete');
