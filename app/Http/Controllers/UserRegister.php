<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserRegister extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(request $request){
        $request->validate([
            'name'=> 'unique:users|required|max:255|min:3',
            'password' => 'required|min:5|max:255',
            'email' => 'required|email|unique:users'
        ]);
        $request['password'] = bcrypt($request['password']);
        $user = User::create($request->except(['_token', 'submit']));
        $user->save();
        return redirect('/');
    }
}
