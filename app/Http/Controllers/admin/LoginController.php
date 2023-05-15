<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.auth');
    }

    public function authenticate(request $request){
        $request->validate([
            'email'=> 'required|email',
            'password'=>'required',
        ]);

        $credentials = $request->only('email','password');
        $credentials['role'] = 'admin';
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('admin.books');
        }

        return back()->withErrors([
            'error' => 'your credentials is wrong'
        ]);

    }

    public function logout(request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

       return redirect()->route('admin.login');
    }
}
