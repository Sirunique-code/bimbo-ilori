<?php

namespace App\Http\Controllers;
use App\Models\SessionBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SessionBookingNotification;
 use Illuminate\Http\JsonResponse;

class SessionBookingController extends Controller {
    public function create() {
        return view('guests.email.book_session');
    }



public function store(Request $request): JsonResponse
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string',
        'session_type' => 'required|string',
        'preferred_date' => 'required|date',
        'preferred_time' => 'required',
        'payment_proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5048',
        'notes' => 'nullable|string',
    ]);

    if ($request->hasFile('payment_proof')) {
        $file = $request->file('payment_proof');
        $filename = time() . '_' . $file->getClientOriginalName();
        $paymentProofFullPath = $file->storeAs('payment_proofs', $filename, 'public');
    }

    $booking = SessionBooking::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'phone' => $validated['phone'],
        'session_type' => $validated['session_type'],
        'preferred_date' => $validated['preferred_date'],
        'preferred_time' => $validated['preferred_time'],
        'payment_proof' => $paymentProofFullPath ?? null,
        'notes' => $validated['notes'] ?? null,
    ]);

    // Send email
    Mail::to('contact@bimboilori.com')->send(new SessionBookingNotification($booking));

    return response()->json(['message' => 'Your session has been booked successfully!']);
}



}