<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

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

        if(is_null($user)){
            return view('home', compact("username"));
        }

        //return redirect('login')->with('error', 'Wrong username or password');
    }

    public function signUpMSME(Request $request)
    {
        DB::table('user')->insert([
            'username' => $request->username,
            'password' => $request->pass,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        $username = $request->username;
        $password = $request->pass;

        $user = User::where('username', $username)->where('password', $password)->get();
        $id = $user->id;
        
        DB::table('msme')->insert([
            'userID' => $id,
            'msmeName' => $request->name,
            'msmeAddress' => $request->address
        ]);

        return view('home');
    }

    public function signUpApplicant(Request $request)
    {
        DB::table('user')->insert([
            'username' => $request->username,
            'password' => $request->pass,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        $username = $request->username;
        $password = $request->pass;

        $user = User::where('username', $username)->where('password', $password)->get();
        $id = $user->id;
        
        DB::table('applicant')->insert([
            'userID' => $id,
            'applicantName' => $request->name,
            'applicantAddress' => $request->address,
            'applicantDOB' => $request->dob
        ]);

        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}