<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Exception;

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

    public function update(Request $request)
    {
        $data = $request->all();

        foreach (['id', 'password', 'comments'] as $key) {
            if ((!isset($data[$key]) or !$data[$key]) or !$key)
                return response('Missing key/value for "' . $key . '"', 422);
        }

        if (strtoupper($data['password']) !== 'PASSWORD')
            return response('Invalid password', 401);

        if (!is_numeric($data['id']))
            return response('Invalid id', 422);

        try {
            $user = User::find($data['id']);
        } catch (Exception $error) {
            return response('Could not update database: ' . $error->getMessage(), 500);
        }

        if (is_null($user)) return response('No such user (3)', 404);

        $user->comments .= "\n" . htmlentities($data['comments']);

        $user->save();

        return response('OK', 200);
    }
}
