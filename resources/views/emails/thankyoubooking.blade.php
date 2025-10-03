
@component('mail::message')
# New Booking Received

A new booking has been made:

- **Preferred Date:** {{ $booking->preferred_date }}
- **Preferred Time:** {{ $booking->preferred_time }}

The payment proof is attached.

Thanks,  
{{ config('app.name') }}
@endcomponent
