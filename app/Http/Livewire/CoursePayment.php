<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Models\Course;

class CoursePayment extends Component
{
    // Public properties for binding
    public $course;
    public $email = '';
    public $couponCode = '';
    public $originalPrice; // Original price (must be public)
    public $discountedPrice; // Discounted price (must be public)
    public $appliedCoupon = null;

    // In-memory coupon storage
    private $coupons = [
        'DISCOUNT50' => 0.5, // 50% discount
        'DISCOUNT20' => 0.2, // 20% discount
    ];

    public function mount(Course $course)
    {
        \Log::info('Course Object:', ['course' => $course]);
    
        $this->course = $course;
        $this->originalPrice = $course->course_price_ngn; // Initialize original price
        $this->discountedPrice = $course->course_price_ngn; // Default to original price
    
        \Log::info('Original Price:', ['originalPrice' => $this->originalPrice]);
    }

    public function applyCoupon()
    {
        if (!$this->couponCode || !isset($this->coupons[$this->couponCode])) {
            session()->flash('error', 'Invalid coupon code.');
            return;
        }

        $discountRate = $this->coupons[$this->couponCode];
        $this->discountedPrice = round($this->originalPrice * (1 - $discountRate));
        $this->appliedCoupon = $this->couponCode;

        session()->flash('success', "Coupon applied! New price: ₦{$this->discountedPrice}");
    }

    public function initializePayment()
    {
        // Validate email
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            session()->flash('error', 'Please enter a valid email.');
            return;
        }

        // Determine final amount
        $finalAmount = $this->discountedPrice ?? $this->originalPrice;

        // Convert amount to kobo (Paystack requires smallest currency unit)
        $amountInKobo = $finalAmount * 100;

        // Initialize payment with Paystack
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer sk_test_5299dccb617ca60f2f6972f2fa36b2b9ddd1234c',
                'Content-Type' => 'application/json',
            ])->post('https://api.paystack.co/transaction/initialize', [
                'email' => $this->email,
                'amount' => $amountInKobo,
                'currency' => 'NGN',
            ]);

            $data = $response->json();

            if ($data['status'] && isset($data['data']['authorization_url'])) {
                return redirect($data['data']['authorization_url']);
            } else {
                session()->flash('error', 'An error occurred while initializing payment.');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred while initializing payment.');
        }
    }

    public function render()
    {
        return view('livewire.course-payment');
    }
}