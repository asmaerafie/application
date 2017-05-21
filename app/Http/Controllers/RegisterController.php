<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function register(Request $request){

        $validator = $this->validator($request->all());
        if($validator->fails()){
            throw new StoreResourceFailedException("Validation Error", $validator->errors());
        }
    }
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:20',
            'lastname' => 'required|max:20',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
   
    protected function create(array $data) {

        return User::create([
 
            'fisrtname' => $data['firstname'],
            
            'lastname' => $data['lastname'],
            
            'email' => $data['email'],

            'password' => bcrypt($data['password']),

        ]);

    }

}


