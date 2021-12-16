<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function signUpMSME(Request $request)
    {
        $username = $request->username;
        $password = $request->pass;
        $email = $request->email;
        $error = "";

        // Check username
        $user = User::where('username', $username)->first();
        if (!is_null($user)) {
            $error = "User already exists!";
            return view('home')->with('error', $error);
        }

        // Check email
        $user = User::where('email', $email)->first();
        if (!is_null($user)) {
            $error = "Email already registered!";
            return view('home')->with('error', $error);
        }

        DB::table('user')->insert([
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'phone' => $request->phone
        ]);

        $user = User::where('username', $username)->where('password', $password)->first();
        $id = $user->userID;

        DB::table('msme')->insert([
            'userID' => $id,
            'msmeName' => $request->name,
            'msmeAddress' => $request->address
        ]);

        return view('home');
    }

    public function signUpApplicant(Request $request)
    {
        $username = $request->username;
        $password = $request->pass;
        $email = $request->email;

        // Check username
        $user = User::where('username', $username)->get();
        if (!is_null($user)) {
            $error = "User already exists!";
            return view('home')->with('error', $error);
        }

        // Check email
        $user = User::where('email', $email)->get();
        if (!is_null($user)) {
            $error = "Email already registered!";
            return view('home')->with('error', $error);
        }

        DB::table('user')->insert([
            'username' => $request->username,
            'password' => $request->pass,
            'email' => $email,
            'phone' => $request->phone
        ]);

        $user = User::where('username', $username)->where('password', $password)->get();
        $id = $user[0]->userID;

        DB::table('applicant')->insert([
            'userID' => $id,
            'applicantName' => $request->name,
            'applicantAddress' => $request->address,
            'applicantDOB' => $request->dob
        ]);

        return view('home');
    }
}
