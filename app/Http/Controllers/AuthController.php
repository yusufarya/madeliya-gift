<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    //// index
    function index() {
        
        return view('auth_user/login_user', [
            'title' => 'Login User'
        ]);
    }

    public function auth(Request $request) {

        $credentials = $request->validate([
            'username'     => 'required',
            'password'  => 'required'
        ]); 
        
        // ddd($request); 
        if (Auth::attempt($credentials)) { 
            // $user = auth()->check();
            // dd($request); 
            // ddd(auth()->user()->status);
            $request->session()->regenerate();
            if (auth()->user()->status == 'Y') {
                return redirect()->intended('/dashboard'); 
            }
        } else if(Auth::guard('customer')->attempt($credentials)) { 
            $request->session()->regenerate();
            if (Auth::guard('customer')->user()->status == 'Y') {
                return redirect()->intended('/home'); 
            }
        }
         
        return back()->with('LoginError', 'Login Failed!');
        // return redirect('/loginMe');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 
        return redirect('/')->with('success', 'You has been logged out');
    }
}
