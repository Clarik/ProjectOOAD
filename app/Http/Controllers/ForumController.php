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

    public function createThreadIndex(){
        return view('createthread');
    }

    public function createThread(Request $request){
        $title = $request->title;
        $content = $request->content;

        $thread = new Thread();
        $thread->userID = session()->get('user')->userID;
        $thread->threadTitle = $title;
        $thread->threadContent = $content;
        $thread->save();

        return redirect('/forum');
    }
}
