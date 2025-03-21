<x-guest-layout>
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonials</h6>
                <h1 class="mb-5">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                
                <!-- Testimonial 1 -->
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded p-2 mx-auto" src="{{ asset('assets/img/testimonial1.jpg') }}" style="max-width: 100%;">
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded p-2 mx-auto" src="{{ asset('assets/img/testimonial2.jpg') }}" style="max-width: 100%;">
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded p-2 mx-auto" src="{{ asset('assets/img/testimonial3.jpg') }}" style="max-width: 100%;">
                </div>
                
                <!-- Testimonial 4 -->
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded p-2 mx-auto" src="{{ asset('assets/img/testimonial4.jpg') }}" style="max-width: 100%;">
                </div>
    
            </div>
        </div>
    </div>
 <!-- Qoutes Gallery -->
    <div class="container mt-5">
        <h4 class="text-primary text-center mb-4">Quotes Gallery</h4>
        <div class="row g-3">
            @php
                $quotes = ['qoute1.jpg', 'qoute2.jpg', 'qoute3.jpg', 'qoute4.jpg', 'qoute5.jpg', 'qoute6.jpg', 'qoute7.jpg', 'qoute8.jpg'];
            @endphp
            @foreach($quotes as $quote)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <img class="img-fluid bg-light p-1 rounded" src="{{ asset('assets/img/' . $quote) }}" alt="Quote">
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
