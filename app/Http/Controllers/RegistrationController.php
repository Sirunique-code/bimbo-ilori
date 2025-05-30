<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewRegistrationEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Broadcast;

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
             // Broadcast the new registration event
    event(new NewRegistrationEvent($validatedData['fullName']));
    
        // Save data to the database (optional)
        \App\Models\Registration::create($validatedData);

        // Send email notification to the admin
        Mail::send('guests.email.admin_notification', ['data' => $validatedData], function ($message) use ($validatedData) {
            $message->to('contact@bimboilori.com') // Replace with your email
                    ->subject('New Registration: ' . $validatedData['fullName']);
        });

        // Send confirmation email to the participant
        Mail::send('guests.email.participant_confirmation', ['data' => $validatedData], function ($message) use ($validatedData) {
            $message->to($validatedData['email']) // Use the participant's email
                    ->subject('Thank You for Registering!');
        });

         if ($request->ajax() || $request->wantsJson()) {
        return response()->json([
            'success' => 'Thank you for registering! We will be in touch soon.'
        ]);
    }

     

        // Redirect with success message
        return redirect()->back()->with('success', 'Thank you for registering! We will be in touch soon.');
    }
}