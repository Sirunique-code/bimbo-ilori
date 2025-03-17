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
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('assets/img/dummy-profile.png') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">OBG</h5>
                    <p>Client</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">"If you're looking for a coach who will truly invest in you, I highly recommend Coach BI. She is a game-changer!"</p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('assets/img/dummy-profile.png') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Busayo</h5>
                    <p>Client</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">"Coach BI has a unique ability to understand her client's challenges and provide the right support, encouragement, and practical strategies. With her coaching, I've gained greater clarity, improved my mindset, and made significant progress in both my personal and professional life."</p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('assets/img/dummy-profile.png') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Grace</h5>
                    <p>Client</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">"Working with Coach BI has been a transformative experience. Her guidance has helped me to unlock my potential and break through personal barriers."</p>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('assets/img/dummy-profile.png') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Mr. Kola</h5>
                    <p>Client</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">"The material you covered was as engaging as it was thoughtful, and we are so grateful that you shared your time, talent, and expertise with us. We truly thank you for your contribution and would be honored to have you back soon."</p>
                    </div>
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
