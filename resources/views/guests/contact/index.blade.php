<x-guest-layout>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">We’d Love to Hear From You</h1>
            </div>
            <div class="row g-4">
                <!-- Contact Information -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Get In Touch</h5>
                    <p class="mb-4">We are delighted to connect with you. Send us a message, and we'll respond as soon as possible.</p>
                    
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0"><a href="mailto:iloribimbo59@gmail.com" class="text-dark">iloribimbo59@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Phone</h5>
                            <p class="mb-0"><a href="tel:+2349028763627" class="text-dark">+234 902 876 3627</a></p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    @livewire('contact-form')
                </div>
            </div>

            <!-- Thank You Message -->
            <div class="text-center mt-5">
                <p class="fw-bold">Thank you for visiting us at <strong>bimboilori.com</strong>.</p>
                <p>We look forward to a rewarding partnership.</p>
            </div>
        </div>
    </div>
</x-guest-layout>
