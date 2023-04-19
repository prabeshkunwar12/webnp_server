<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contactMessage = new ContactMessage([
            'email' => $request->email,
            'message' => $request->message,
        ]);

        $contactMessage->save();

        return redirect()->back()->with('success', 'Your message has been sent successfully');
    }
}
