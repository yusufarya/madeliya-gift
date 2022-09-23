<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CustLoginController extends Controller
{
    function index() {
        
        return view('auth_cust/login', [
            'title' => 'Login User'
        ]);
    }

    public function auth(Request $request) {

        $credentials = $request->validate([
            'username'     => 'required',
            'password'  => 'required'
        ]); 
        
        // ddd($request); 
        if(Auth::guard('customer')->attempt($credentials)) { 
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
