<?php

namespace App\Mail;

use App\Models\SessionBooking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SessionBookingNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;

    public function __construct(SessionBooking $booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        $email = $this->subject('New Session Booking Received')
                      ->markdown('emails.session_booking_notification', [
                          'booking' => $this->booking
                      ]);

        // Attach the payment proof if it exists
        $filePath = storage_path('app/public/' . $this->booking->payment_proof);

        if ($this->booking->payment_proof && file_exists($filePath)) {
            $email->attach($filePath, [
                'as' => 'payment_proof.' . pathinfo($filePath, PATHINFO_EXTENSION),
                'mime' => mime_content_type($filePath),
            ]);
        }

        return $email;
    }
}
