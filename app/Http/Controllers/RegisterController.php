<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUser;
use App\Models\User;

class RegisterController extends Controller
{
      public function showRegister()
    {
        return view('register');
    }
     
     public function register(Request $request) {
         
        $data = Input::except(array('token')) ;
         
        $rules=array(
            'first_name' => 'required|min:2|max:255',
            'last_name' => 'required|min:2|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:3|confirmed',
        );
         
        $validator = Validator::make($data , $rules  );
        
         if ($validator->fails()){
             return redirect()->route('register')->withErrors($validator);
             
         }
         else
          
            $this->create($request);
           
            return redirect()->route('login')->with('message', 'login!');
          
     }
         
     protected function create(Request $request) {

           $user = User::query()->create([
               'first_name' => $request->get('first_name'),
               'last_name' => $request->get('last_name'),
               'email' => $request->get('email'),
               'password' => bcrypt($request->get('password')),

        ]);
         
        // return redirect()->route('login')->with('messages', ['welcome']);
    }
         
}
