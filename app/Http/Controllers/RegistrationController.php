<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewRegistrationEvent;
use App\Models\Registration;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'lastName' => 'required|string|max:255',
            'whatsappNumber' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'firstName' => 'required|string|max:255',
        ]);

        $fullName = $validatedData['firstName'] . ' ' . $validatedData['lastName'];

        // Broadcast the new registration event
        event(new NewRegistrationEvent($fullName));

        // Save to database
        Registration::create($validatedData);

        // Send emails (wrap in try-catch to log any failures)
        try {
            Mail::send('guests.email.admin_notification', ['data' => $validatedData], function ($message) use ($fullName) {
                $message->to('contact@bimboilori.com')
                        ->subject('New Registration: ' . $fullName);
            });

            Mail::send('guests.email.participant_confirmation', ['data' => $validatedData], function ($message) use ($validatedData) {
                $message->to($validatedData['email'])
                        ->subject('Thank You for Registering!');
            });
        } catch (\Exception $e) {
            Log::error('Mail sending failed: ' . $e->getMessage());
        }

        // Return JSON response (AJAX)
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => 'Thank you for registering! We will be in touch soon.'
            ]);
        }

        // Redirect with success message
        return redirect()->back()->with('success', 'Thank you for registering! We will be in touch soon.');
    }
}
