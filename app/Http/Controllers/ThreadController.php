<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    // Display the threads index
    public function index()
    {
        $threads = Thread::latest()->get();
        return view('threads.index', compact('threads'));
    }

    // Display the thread creation form
    public function create()
    {
        return view('threads.create');
    }

    // Store a new thread
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $thread = Thread::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('threads.show', $thread);
    }

    // Display a single thread
    public function show(Thread $thread)
    {
        return view('threads.show', compact('thread'));
    }

    // Display a single thread
    public function destroy(Thread $thread)
    {
        $thread->delete();
        return redirect()->back();
    }

    // Other resource controller methods, if needed (edit, update, destroy)
}
