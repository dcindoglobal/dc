<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        // Handle contact form submission
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        // Process the contact form (send email, save to database, etc.)
        
        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    public function quote(Request $request)
    {
        // Handle quote form submission
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        // Process the quote request
        
        return redirect()->back()->with('success', 'Thank you for your quote request! We will contact you shortly.');
    }
}