<?php

// app/Http/Controllers/ThankYouBookingController.php
namespace App\Http\Controllers;

use App\Models\ThankYouBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ThankYouBookingMail;

class ThankYouBookingController extends Controller
{
  

public function store(Request $request)
{
    $validated = $request->validate([
        'payment_proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5048',
        'preferred_date' => 'required|date',
        'preferred_time' => 'required',
    ]);

    // Save file
    $path = $request->file('payment_proof')->store('payments', 'public');

    // Save booking in DB
    $booking = ThankYouBooking::create([
        'payment_proof' => $path,
        'preferred_date' => $validated['preferred_date'],
        'preferred_time' => $validated['preferred_time'],
    ]);

    // Send email to admin
    Mail::to('contact@bimboilori.com')->send(new ThankYouBookingMail($booking));

    // Generate WhatsApp URL
    $whatsappNumber = '2349028763627'; // International format without '+'
    $message = "Hello, I just submitted my booking. My preferred date is {$booking->preferred_date} at {$booking->preferred_time}.";
    $whatsappUrl = "https://wa.me/{$whatsappNumber}?text=" . urlencode($message);

    // Return success + WhatsApp URL
    return response()->json([
        'message' => 'Your booking has been submitted successfully!',
        'whatsapp_url' => $whatsappUrl
    ]);
}
}
