{{-- <div class="text-center pb-4">
    <!-- Price Display -->
    <h3 class="mb-0 course-price">
        <span id="original-price">₦{{ number_format($originalPrice, 2) }}</span>
        @if ($appliedCoupon)
            <span id="discounted-price" style="text-decoration: line-through; color: red;">₦{{ number_format($discountedPrice, 2) }}</span>
        @endif
    </h3>

    <!-- Email Input -->
    <div class="mb-3">
        <input type="email" wire:model="email" class="form-control" placeholder="Enter your email" required />
    </div>

    <!-- Coupon Application -->
    <div class="mb-3">
        <input type="text" wire:model="couponCode" class="form-control" placeholder="Enter coupon code" />
        <button class="btn btn-warning mt-2" wire:click="applyCoupon">Apply Coupon</button>
    </div>

    <!-- Payment Buttons -->
    <button class="btn btn-success btn-lg mx-2" wire:click="initializePayment">Pay Now</button>
    <a href="{{ $course->register_link }}" class="btn btn-primary btn-lg mx-2">Register Here</a>
    <a href="{{ route('courses') }}" class="btn btn-secondary btn-lg mx-2">Back to Courses</a>
</div> --}}