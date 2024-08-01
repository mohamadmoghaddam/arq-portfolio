<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return redirect('/admin')->withErrors([
            'email' => 'Your email or password is not correct.',
        ])->onlyInput('email');
    }

    public function login(){
        if (Auth::check()) {
            return view('/admin/dashboard');;
        }
        return view('/admin/login');
    }

}
