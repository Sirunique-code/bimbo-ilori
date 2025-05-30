<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'fullName' => 'required|string|max:255',
            'whatsappNumber' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        // Save data to the database (optional)
        \App\Models\Registration::create($validatedData);

        // Send email notification to the admin
        Mail::send('emails.admin_notification', ['data' => $validatedData], function ($message) use ($validatedData) {
            $message->to('your-email@example.com') // Replace with your email
                    ->subject('New Registration: ' . $validatedData['fullName']);
        });

        // Send confirmation email to the participant
        Mail::send('emails.participant_confirmation', ['data' => $validatedData], function ($message) use ($validatedData) {
            $message->to($validatedData['email']) // Use the participant's email
                    ->subject('Thank You for Registering!');
        });

        // Redirect with success message
        return redirect()->back()->with('success', 'Thank you for registering! We will be in touch soon.');
    }
}