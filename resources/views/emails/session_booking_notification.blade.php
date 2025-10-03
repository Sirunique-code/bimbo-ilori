@component('mail::message')
# New Session Booking

**Name:** {{ $booking->name }}  
**Email:** {{ $booking->email }}  
**Phone:** {{ $booking->phone }}  
**Session Type:** {{ $booking->session_type }}  
**Preferred Date:** {{ $booking->preferred_date }}  
**Preferred Time:** {{ $booking->preferred_time }}  
**Notes:** {{ $booking->notes ?? 'N/A' }}  

**[View Payment Proof]("{{ asset('storage/' . $booking->payment_proof) }}")**

@endcomponent
