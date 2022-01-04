<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function createReply(Request $request, $id){
        $content = $request->content;

        // dd($content, session()->get('user')->userID);
        $reply = new Reply();
        $reply->threadID = $id;
        $reply->userID = session()->get('user')->userID;
        $reply->replyContent = $content;
        $reply->save();

        return back();
    }
}
