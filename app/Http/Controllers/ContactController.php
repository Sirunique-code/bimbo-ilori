<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate input fields
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Email details
        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Send Email
        Mail::send('emails.contact', $data, function ($message) {
            $message->to('iloribimbo59@gmail.com')
                    ->subject('New Contact Form Submission');
        });

        // Redirect with success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
