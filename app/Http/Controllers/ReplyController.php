<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    // Store a new reply
    public function store(Request $request, Thread $thread)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $reply = Reply::create([
            'user_id' => auth()->id(),
            'thread_id' => $thread->id,
            'body' => $request->body,
        ]);

        return redirect()->route('threads.show', $thread);
    }

    // Other resource controller methods, if needed (index, create, show, edit, update, destroy)
}
