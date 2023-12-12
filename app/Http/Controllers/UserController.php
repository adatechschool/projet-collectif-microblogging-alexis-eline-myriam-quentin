<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function getAllUsers()
    {
        $users = User::all();
        //on accède à la variable $users qu'on nomme ici "users" pour la transmettre à la view blade
        return view("users.directory", ["users" => $users]);
    }

    public function getOneUser($id)
    {
        $user = User::find($id);
        return view("users.singleUser", ["user" => $user]);
    }
}

