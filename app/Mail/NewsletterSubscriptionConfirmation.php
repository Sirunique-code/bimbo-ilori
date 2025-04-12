<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterSubscriptionConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->subject('Thank You for Subscribing!')
                    ->view('guests.email.newsletter_confirmation');
    }
}