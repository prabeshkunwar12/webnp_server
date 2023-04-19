<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contactMessage = new ContactMessage([
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ]);
        $contactMessage->save();

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully.');
    }
}
