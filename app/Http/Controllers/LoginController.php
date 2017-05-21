<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function __construct() {
        $this->middleware('guest');
    }
    
    public function showLogin()
    {
        return view('login');
    }
    
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->withErrors(['Login error!']);
        }
    }
   
    
    public function logout()
    {
        Auth::logout();
        
        return redirect()->route('login');
    }
}