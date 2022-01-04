<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(!session()->has('user')){
            return redirect('login');
        }

        $threadList = Thread::all();
        $count = 0;
        if(count($threadList)<5) $count = count($threadList);
        else $count = 5;

        $threads = $threadList->random($count);
        return view('home')->with('threads', $threads);
    }
}
