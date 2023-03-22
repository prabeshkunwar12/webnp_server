<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactFormEmail;

class ContactController extends Controller
{
    public function create()
{
    return view('contact');
}

public function store(Request $request)
{
    $email = 'mnobin@upei.ca';
    $data = $request->validate([
        'email' => 'required|email',
        'message' => 'required',
    ]);

    Mail::to($email)->send(new ContactFormEmail($data));

    return back()->with('message', 'Thanks for your message. We will be in touch.');
}

}