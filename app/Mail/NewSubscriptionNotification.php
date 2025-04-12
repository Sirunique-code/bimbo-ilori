<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\NewsletterSubscriber;

class NewSubscriptionNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $subscriber;

    public function __construct(NewsletterSubscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    public function build()
    {
        return $this->subject('New Newsletter Subscriber')
                    ->view('guests.email.new_subscription_notification');
    }
}