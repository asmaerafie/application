<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $users = User::query();

        if($request->has('name')) {
            $users = $users->where('name', 'like', '%' . $request->get('name') . '%');
        }

        $users = $users->get();

        return view('users.index', ['users' => $users]);
    }
    public function create() {
        return view('users,create');
    }
}
