<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends BaseController
{

    public function login(){
        return view('pages.login', $this->data);
    }

    public function doLogin(Request $request){
        $user = User::where('email', $request->email)->where('password', md5($request->password))->first();
        if(!$user){
            return redirect()->route('login')->with('error', 'Invalid email or password');
        }
        session()->put('user', $user);
        return redirect()->route('home');
    }

    public function logout(){
        session()->forget('user');
        return redirect()->route('home');
    }
}
