<?php

namespace App\Http\Controllers;

use App\Models\DiscussionComment;
use App\Models\DiscussionPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionCommentController extends Controller
{
    public function store(Request $request, DiscussionPost $discussion_post)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $comment = new DiscussionComment([
            'user_id' => Auth::id(),
            'discussion_post_id' => $discussion_post->id,
            'body' => $request->body,
        ]);
        $comment->save();

        return redirect()->route('discussion_posts.show', $discussion_post->id)->with('success', 'Comment added successfully.');
    }
}
