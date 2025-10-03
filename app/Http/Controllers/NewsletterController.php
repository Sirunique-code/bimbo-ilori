<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterSubscriptionConfirmation;

class NewsletterController extends Controller
{
    // Handle newsletter subscription form submission
    public function subscribe(Request $request)
    {
        // Validate the input
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email:rfc,dns|unique:newsletter_subscribers,email'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 422); // 422 Unprocessable Entity
        }
    
        // Save the email to the database
        $subscriber = new NewsletterSubscriber();
        $subscriber->email = $request->input('email');
        $subscriber->save();
    
        // Send a confirmation email to the subscriber
        Mail::to($request->input('email'))->send(new NewsletterSubscriptionConfirmation($request->input('email')));
    
        // Notify the admin about the new subscription
        $adminEmail = 'contact@bimboilori.com';
        Mail::to($adminEmail)->send(new \App\Mail\NewSubscriptionNotification($subscriber));
    
        // Return a JSON response
        return response()->json([
            'success' => true,
            'message' => 'Thank you for subscribing to our newsletter!'
        ]);
    }

    // Show all subscribed emails
    public function index()
    {
        $subscribers = NewsletterSubscriber::latest()->paginate(10); // Paginate results
        return view('guests.newsletter.index', compact('subscribers'));
    }
}