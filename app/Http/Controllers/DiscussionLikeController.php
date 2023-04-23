<?php

namespace App\Http\Controllers;

use App\Models\DiscussionLike;
use App\Models\DiscussionPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionLikeController extends Controller
{
    public function store(Request $request, DiscussionPost $discussion_post)
    {
        $like = new DiscussionLike([
            'user_id' => Auth::id(),
            'discussion_post_id' => $discussion_post->id,
        ]);

        try {
            $like->save();
        } catch (\Exception $e) {
            return redirect()->route('discussion_posts.show', $discussion_post->id)->with('error', 'You have already liked this post.');
        }

        return redirect()->route('discussion_posts.show', $discussion_post->id)->with('success', 'You liked the post.');
    }

    public function destroy(Request $request, DiscussionPost $discussion_post)
    {
        $like = DiscussionLike::where('user_id', Auth::id())->where('discussion_post_id', $discussion_post->id)->first();

        if ($like) {
            $like->delete();
            return redirect()->route('discussion_posts.show', $discussion_post->id)->with('success', 'You unliked the post.');
        }

        return redirect()->route('discussion_posts.show', $discussion_post->id)->with('error', 'You have not liked this post.');
    }
}
