<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    use RegistersUsers;
    
     protected $redirectTo = '/home';
    
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function register(Request $request){

        $validator = $this->validator($request->all());
        
        if($validator->fails()){
            
            $this->throwValidationException(
                    $request , $validator
                    );
        }
        
        $this->auth->login($this->register->create($request->all()));
    }
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
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


