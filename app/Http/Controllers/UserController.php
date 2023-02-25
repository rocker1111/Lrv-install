<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return $users;
    }
    public function show($id){
        $user = User::find($id);
        return $user;
    }
    public function create() {
        //return "create a user";
        $data = [
            'name' => 'Jone Doe',
            'email' => 'jone1@gmail.com',
            'password' => '123456'
        ];
        User::create($data);
        return "create Success Fully";
    }

    public function edit($id){
        $user = User::findOrFail($id);
        $user-> name = 'new name';
        $user->email = 'new_email@gmail.com';
        $user->save();

        return 'Edited...';
    }
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();

        return 'Deleted...';
    }
}
