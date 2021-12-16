<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $request->username)
            ->where('password', $request->password)
            ->first();

        $username = $user->username;

        if (!empty($user)) {
            return view('home', compact("username"));
        }

        //return redirect('login')->with('error', 'Wrong username or password');
    }
}
