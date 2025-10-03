<?php

// app/Mail/ThankYouBookingMail.php
namespace App\Mail;

use App\Models\ThankYouBooking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThankYouBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;

    public function __construct(ThankYouBooking $booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        return $this->subject('New Booking Confirmation')
            ->markdown('emails.thankyoubooking')
            ->attach(storage_path('app/public/' . $this->booking->payment_proof));
    }
}
