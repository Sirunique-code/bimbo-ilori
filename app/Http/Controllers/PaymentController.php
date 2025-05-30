<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Course;

class PaymentController extends Controller
{
    // Paystack API keys (Replace with your actual keys)
    private $paystackSecretKey = 'sk_test_5299dccb617ca60f2f6972f2fa36b2b9ddd1234c';
    private $paystackPublicKey = 'pk_test_e276eb4621d1830e6af24bc697b40ed3c83fa843';

    // In-memory coupon storage (You can replace this with a database)
    private $coupons = [
        'DISCOUNT50' => 0.5, // 50% discount
        'DISCOUNT20' => 0.2, // 20% discount
    ];

    /**
     * Initialize Paystack payment
     */
    public function initializePayment(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'email' => 'required|email',
            'amount' => 'required|numeric',
            'currency' => 'required|string|in:NGN,USD', // Restrict to supported currencies
            'coupon_code' => 'nullable|string',
            'course_id' => 'required|integer',
        ]);

        $email = $request->input('email');
        $amount = $request->input('amount'); // Amount in NGN or USD
        $currency = $request->input('currency'); // NGN or USD
        $couponCode = $request->input('coupon_code');
        $courseId = $request->input('course_id');

        // Apply coupon discount if provided
        $finalAmount = $amount;
        if ($couponCode && isset($this->coupons[$couponCode])) {
            $discountRate = $this->coupons[$couponCode];
            $finalAmount = round($amount * (1 - $discountRate)); // Use round() instead of ceil()
        }

        // Convert amount to the smallest currency unit (kobo for NGN, cents for USD)
        $amountInSmallestUnit = $currency === 'NGN' ? $finalAmount * 100 : $finalAmount * 100;

        // Store the course ID and currency in the session
        session(['payment_course_id' => $courseId]);
        session(['payment_currency' => $currency]);
        \Log::info('Course ID and currency stored in session:', [
            'course_id' => $courseId,
            'currency' => $currency,
        ]);

        // Make a request to Paystack to initialize payment
        $client = new Client();
        try {
            $response = $client->post('https://api.paystack.co/transaction/initialize', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->paystackSecretKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'email' => $email,
                    'amount' => $amountInSmallestUnit,
                    'currency' => $currency,
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            // Log Paystack's response for debugging
            \Log::info('Paystack Initialization Response:', $data);

            // Return the authorization URL to the frontend
            return response()->json(['authorization_url' => $data['data']['authorization_url']]);
        } catch (\Exception $e) {
            \Log::error('Paystack Initialization Error: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while initializing payment.'], 500);
        }
    }

    /**
     * Handle Paystack callback
     */
    public function handleCallback(Request $request)
    {
        // Extract the reference from the query string
        $reference = $request->query('reference');
        if (!$reference) {
            return redirect('/payment/error')->with('error', 'Invalid payment reference.');
        }

        // Retrieve the currency from the session
        $currency = session('payment_currency');
        if (!$currency) {
            \Log::error('Currency not found in session.');
            return redirect('/payment/error')->with('error', 'Currency not found.');
        }

        // Verify the payment status with Paystack
        $client = new Client();
        try {
            $response = $client->get("https://api.paystack.co/transaction/verify/$reference", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->paystackSecretKey,
                    'Content-Type' => 'application/json',
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            // Check if the payment was successful
            if ($data['data']['status'] === 'success') {
                // Retrieve the course ID from the session
                $courseId = session('payment_course_id');
                if (!$courseId) {
                    \Log::error('Course ID not found in session.');
                    return redirect('/payment/error')->with('error', 'Course not found.');
                }

                // Fetch the course name from the database
                $course = Course::find($courseId);
                if (!$course) {
                    \Log::error('Course not found in database.');
                    return redirect('/payment/error')->with('error', 'Course not found.');
                }

                // Redirect to success page with course details
                return redirect('/payment/success')->with([
                    'message' => "Payment successful in {$currency}!",
                    'course_name' => $course->course_title,
                ]);
            } else {
                // Redirect to error page
                return redirect('/payment/error')->with('error', 'Payment failed.');
            }
        } catch (\Exception $e) {
            \Log::error('Paystack Callback Error: ' . $e->getMessage());
            return redirect('/payment/error')->with('error', 'An error occurred while verifying payment.');
        }
    }

    /**
     * Apply Coupon
     */
    public function applyCoupon(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required|string',
            'course_id' => 'required|integer',
            'original_price' => 'required|numeric',
        ]);

        $couponCode = $request->input('coupon_code');
        $originalPrice = $request->input('original_price');

        if (!isset($this->coupons[$couponCode])) {
            return response()->json(['error' => 'Invalid coupon code.']);
        }

        $discountRate = $this->coupons[$couponCode];
        $discountedPrice = round($originalPrice * (1 - $discountRate)); // Use round() for accurate calculations

        // Log the discounted price for debugging
        \Log::info('Discount Calculation:', [
            'original_price' => $originalPrice,
            'discount_rate' => $discountRate,
            'discounted_price' => $discountedPrice,
        ]);

        return response()->json(['discounted_price' => $discountedPrice]);
    }
}