<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUser;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    //affiche la liste des utilisateurs
    public function index(Request $request)
    {
        $users = User::query();
       
        if($request->has('name')) {
            $users = $users->where('name', 'like', '%' . $request->get('name') . '%');
        }

        $users = $users->get();
        $users = User::paginate(4);
        return view('users.index', ['users' => $users]);
        
    }
     
    //envoie le formulaire pour créer un nouvel utilisateur
    public function create() {
        return view('users.create');
    }
    
    //crée un nouvel utilisateur
    public function store(StoreUser $request) {
      $user = User::query()->create([
          'name' => $request->get('name'),
          'email' => $request->get('email'),
          'password' => bcrypt($request->get('password')),
      ]);
      
      return redirect()->route('users.index')->with('messages', ['User created']);
    }
    //affiche les données d'un utilisateur
    public function show(Request $request, User $user) {
        dd($user);
    }
    
    //envoie le formulaire pour la modification d'un utilisateur
    public function edit(User $user) {
        return view('users.edit', ['users' => $user]);
    }
    
    //modifier les données d'un utilisateur
    // UpdateUser form request validation
    public function update(Request $request, User $user) {
        $user->update($request->intersect(['name', 'email']));
        return redirect()->route('users.index')->with('messages', ['User updated']);
    }
    
    public function delete(User $user) {
        // delete and redirect
        $user->delete();
        return redirect()->route('users.index')->with('messages', ['User deleted']);
    }
}


