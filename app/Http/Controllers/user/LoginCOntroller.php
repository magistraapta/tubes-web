<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('user.login');
    }

    public function authenticate(request $request){
        $request->validate([
            'email'=> 'required|email',
            'password'=>'required',
        ]);

        $credentials = $request->only('email','password');
        $credentials['role'] = 'user';
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('user.index');
        }

        return back()->withErrors([
            'error' => 'your credentials is wrong'
        ]);
    }

    public function logout(request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

       return redirect()->route('user.index');
    }
}
