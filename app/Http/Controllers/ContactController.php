<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validationData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'phone' => 'nullable|string|max:255',
        ]);

        $contact = Contact::create($validationData);

        //Mail::to($contact->email)->send(new ContactReceived($contact));

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully! Our team will evaluate your request and get back to you as soon as possible');
    }
}
