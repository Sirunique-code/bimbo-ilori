<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Mail\NewsletterSubscriptionConfirmation;
use App\Mail\NewSubscriptionNotification;

class NewsletterController extends Controller
{
    /**
     * Handle newsletter subscription form submission with multi-layer anti-spam protection.
     */
    public function subscribe(Request $request)
    {
        // LAYER 1: Honeypot Protection (Bots fill hidden fields, humans never do)
        if ($request->filled('b_hp_name') || $request->filled('website_url') || $request->filled('phone_number')) {
            Log::info("Newsletter bot trapped via honeypot: IP {$request->ip()}, email: " . $request->input('email'));
            return $this->respondSuccess($request);
        }

        // LAYER 2: Time-Gate Protection (Automated bots submit in < 2 seconds)
        if ($request->filled('_sub_ts')) {
            try {
                $formLoadedTime = decrypt($request->input('_sub_ts'));
                if (is_numeric($formLoadedTime) && (time() - $formLoadedTime) < 2) {
                    Log::info("Newsletter bot trapped via time-gate (< 2s): IP {$request->ip()}, email: " . $request->input('email'));
                    return $this->respondSuccess($request);
                }
            } catch (\Exception $e) {
                // Ignore decryption errors
            }
        }

        $email = strtolower(trim($request->input('email', '')));

        // LAYER 3: Disposable, Test, and Form-Testing Domain Blacklist (e.g. formtests.info)
        if ($this->isBlockedDomain($email)) {
            Log::info("Newsletter bot dropped (blacklisted domain): IP {$request->ip()}, email: {$email}");
            // Return fake success so the bot script doesn't re-attempt with a different payload
            return $this->respondSuccess($request);
        }

        // LAYER 4: Gibberish & Machine-Generated Username Heuristics (e.g. wxgnkmmu, slrvxini)
        if ($this->isGibberishUsername($email)) {
            Log::info("Newsletter bot dropped (gibberish pattern): IP {$request->ip()}, email: {$email}");
            return $this->respondSuccess($request);
        }

        // LAYER 5: RFC & DNS Email Validation + Uniqueness Check
        $validator = Validator::make(['email' => $email], [
            'email' => [
                'required',
                'string',
                'email:rfc,dns',
                'max:150',
                'unique:newsletter_subscribers,email',
            ],
        ], [
            'email.required' => 'Please provide an email address.',
            'email.email' => 'Please provide a valid, active email address.',
            'email.unique' => 'This email address is already subscribed to our newsletter!',
        ]);

        if ($validator->fails()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()->first(),
                ], 422);
            }

            return back()->withInput()->with('newsletter_error', $validator->errors()->first());
        }

        // Save real subscriber to database
        $subscriber = new NewsletterSubscriber();
        $subscriber->email = $email;
        $subscriber->save();

        // Safely send confirmation email to subscriber (catch errors to prevent 500 response on SMTP issues)
        try {
            Mail::to($email)->send(new NewsletterSubscriptionConfirmation($email));
        } catch (\Exception $e) {
            Log::warning("Could not send newsletter confirmation to {$email}: " . $e->getMessage());
        }

        // Safely notify admin
        try {
            $adminEmail = 'contact@bimboilori.com';
            Mail::to($adminEmail)->send(new NewSubscriptionNotification($subscriber));
        } catch (\Exception $e) {
            Log::warning("Could not notify admin about subscriber {$email}: " . $e->getMessage());
        }

        return $this->respondSuccess($request, 'Thank you for subscribing to our newsletter!');
    }

    /**
     * Return JSON or redirect response consistently.
     */
    protected function respondSuccess(Request $request, string $message = 'Thank you for subscribing to our newsletter!')
    {
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => $message,
            ]);
        }

        return back()->with('newsletter_success', $message);
    }

    /**
     * Check if the email domain belongs to known form testing, disposable, or bot networks.
     */
    protected function isBlockedDomain(string $email): bool
    {
        $parts = explode('@', $email);
        if (count($parts) !== 2) {
            return true;
        }

        $domain = strtolower(trim($parts[1]));

        $blockedDomains = [
            'formtests.info',
            'formtest.info',
            'formtests.com',
            'formtest.com',
            'formtesting.com',
            'mailinator.com',
            'guerrillamail.com',
            'guerrillamail.net',
            'guerrillamail.org',
            'guerrillamailblock.com',
            'sharklasers.com',
            'tempmail.com',
            'temp-mail.org',
            'tempmail.net',
            '10minutemail.com',
            'throwawaymail.com',
            'trashmail.com',
            'trashmail.net',
            'yopmail.com',
            'yopmail.fr',
            'yopmail.net',
            'maildrop.cc',
            'dispostable.com',
            'fakeinbox.com',
            'emailondeck.com',
            'inboxkitten.com',
            'mohmal.com',
            'generator.email',
            'crazymailing.com',
            'test.com',
            'example.com',
            'example.org',
            'example.net',
            'sample.com',
            'testing.com',
        ];

        if (in_array($domain, $blockedDomains, true)) {
            return true;
        }

        // Catch wildcard patterns (e.g., anything containing 'formtest', 'tempmail', 'trashmail')
        if (preg_match('/(formtest|temp.*mail|throwaway|trash.*mail|disposa|fake.*mail|spam4|nada\.ltd)/i', $domain)) {
            return true;
        }

        return false;
    }

    /**
     * Detect machine-generated, random consonant strings commonly used by automated testing bots.
     */
    protected function isGibberishUsername(string $email): bool
    {
        $parts = explode('@', $email);
        $username = strtolower(trim($parts[0] ?? ''));

        // 1. 5 or more consecutive consonants (e.g. wxgnkmmu, slrvxini)
        if (preg_match('/[bcdfghjklmnpqrstvwxyz]{5,}/i', $username)) {
            return true;
        }

        // 2. Length >= 5 with zero vowels
        if (strlen($username) >= 5 && !preg_match('/[aeiouy0-9]/i', $username)) {
            return true;
        }

        // 3. 4 or more identical consecutive characters
        if (preg_match('/(.)\1{3,}/', $username)) {
            return true;
        }

        return false;
    }

    /**
     * Show all subscribed emails in the admin panel.
     */
    public function index()
    {
        $subscribers = NewsletterSubscriber::latest()->paginate(15);
        return view('guests.newsletter.index', compact('subscribers'));
    }

    /**
     * Delete an individual subscriber record.
     */
    public function destroy($id)
    {
        $subscriber = NewsletterSubscriber::findOrFail($id);
        $subscriber->delete();

        return back()->with('success', 'Subscriber removed successfully.');
    }

    /**
     * Purge all known spam/bot subscribers from the database.
     */
    public function purgeSpam()
    {
        $deleted = NewsletterSubscriber::where(function ($query) {
            $query->where('email', 'like', '%formtests%')
                  ->orWhere('email', 'like', '%mailinator%')
                  ->orWhere('email', 'like', '%tempmail%')
                  ->orWhere('email', 'like', '%guerrillamail%')
                  ->orWhere('email', 'like', '%yopmail%')
                  ->orWhere('email', 'like', '%10minutemail%')
                  ->orWhere('email', 'like', '%trashmail%')
                  ->orWhere('email', 'like', '%test.com%')
                  ->orWhere('email', 'like', '%example.com%');
        })->delete();

        return back()->with('success', "Purged {$deleted} spam subscriber record(s) from the database.");
    }
}
