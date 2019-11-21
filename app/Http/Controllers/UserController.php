<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show($userId)
    {
        $user = User::find($userId);
        if ($user == null) {
            $user = (object) [];
            $user->name = 'No such user (3)';
            $user->body = 'Input a correct user Id and Make sure you seed the database';
            return view('error')->with('user', $user);
        } else return view('user')->with('user', $user);
    }
}
