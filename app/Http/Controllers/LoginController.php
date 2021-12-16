<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use League\CommonMark\Extension\SmartPunct\EllipsesParser;

use function Psy\debug;

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

        if (!empty($user)){
            session(['user' => $user]);
            return view('home');
        }
            

        return back();
    }

    
}
