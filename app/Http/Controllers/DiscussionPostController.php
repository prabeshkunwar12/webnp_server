<?php

namespace App\Http\Controllers;

use App\Models\DiscussionPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionPostController extends Controller
{
public function index()
    {
        // Retrieve all discussion posts or a paginated list, depending on your requirements
        $discussion_posts = DiscussionPost::latest()->paginate(10);

        // Pass the $discussion_posts variable to the view
        return view('discussion_posts.index', [
            'discussion_posts' => $discussion_posts,
            'current_user' => Auth::user()
        ]);
    }


    public function create()
    {
        // Make sure the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to create a post.');
        }

        return view('discussion_posts.create');
    }

    public function store(Request $request)
{
    // Make sure the user is authenticated
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'You must be logged in to create a post.');
    }

    $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // validate the uploaded image file
    ]);

    $post = new DiscussionPost([
        'title' => $request->title,
        'body' => $request->body,
        'user_id' => Auth::id(),
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $post->image = $imageName;
    }
    $post->save();

    return redirect()->route('discussion_posts.show', $post->id)->with('success', 'Post created successfully.');
}


    public function show(DiscussionPost $discussion_post)
    {
        return view('discussion_posts.show', compact('discussion_post'));
    }

    public function edit(DiscussionPost $discussion_post)
    {
        // Make sure the user is authenticated and the owner of the post
        if (!Auth::check() || Auth::id() !== $discussion_post->user_id) {
            return redirect()->route('discussion_posts.index')->with('error', 'You are not authorized to edit this post.');
        }

        return view('discussion_posts.edit', compact('discussion_post'));
    }

    public function update(Request $request, DiscussionPost $discussion_post)
    {
        // Make sure the user is authenticated and the owner of the post
        if (!Auth::check() || Auth::id() !== $discussion_post->user_id) {
            return redirect()->route('discussion_posts.index')->with('error', 'You are not authorized to edit this post.');
        }

        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $discussion_post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('discussion_posts.show', $discussion_post->id)->with('success', 'Post updated successfully.');
    }

    public function destroy(DiscussionPost $discussion_post)
    {
        // Make sure the user is authenticated and the owner of the post
        if (!Auth::check() || Auth::id() !== $discussion_post->user_id) {
            return redirect()->route('discussion_posts.index')->with('error', 'You are not authorized to delete this post.');
        }

        $discussion_post->delete();
        return redirect()->route('discussion_posts.index')->with('success', 'Post deleted successfully.');
    }

}
