<x-guest-layout>
    <!-- Testimonials Section -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonials</h6>
                <h1 class="mb-5">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                @foreach($testimonials as $testimonial)
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded p-2 mx-auto" src="{{ asset('storage/' . $testimonial->image) }}" style="max-width: 100%;">
                    </div>
                @endforeach
            </div>            
        </div>
    </div>

    <!-- Quotes Gallery -->
    <div class="container mt-5">
        <h4 class="text-primary text-center mb-4">Quotes Gallery</h4>
        <div class="row g-3">
            @foreach($quotes as $quote)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <img class="img-fluid bg-light p-1 rounded" src="{{ asset('storage/' . $quote->image) }}" alt="Quote">
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
