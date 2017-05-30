<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function __construct() {
       // $this->middleware('guest');
       // $this->middleware('auth');
    }
    
    public function showLogin()
    {
        return view('login');
    }
    
    public function login(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
                ])) 
        {
            
            return redirect()->route('home')->with('message', 'Your are now logged in!');
        } else {
            
            return redirect()->back()->withErrors(['Login error!']);
           
        }
    }
   
    public function logout()
    {

        Auth::logout();
        
        return redirect()->route('login')->with('message', 'Your are now logged out!');
    }
}
