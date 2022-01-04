<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(){
        $threads = Thread::paginate(15);

        return view('forum')->with('threads', $threads);
    }

    public function viewThread($id){
        $thread = Thread::where('threadID', $id)->first();
        $replies = Reply::where('threadID', $id)->get();

        return view('viewthread')
                ->with('thread', $thread)
                ->with('replies', $replies);
    }
}
