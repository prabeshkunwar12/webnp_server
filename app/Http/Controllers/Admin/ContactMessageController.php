<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactMessageController extends Controller
{
    public function index()
    {
        $contactMessages = ContactMessage::all();
        return view('admin.contact-messages.index', compact('contactMessages'));
    }

    public function destroy(ContactMessage $message)
    {
        $message->delete();
        return redirect()->route('admin.contact-messages.index')->with('success', 'Message deleted successfully');
    }
    // Add other methods as needed
}
