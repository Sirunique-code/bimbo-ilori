<x-guest-layout>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Program Details</h6>
                <h1 class="mb-5">{{ $course->course_title }}</h1>
                <h6 class="py+2 ps-3">{{ $course->course_track }}</h6>

            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                     <a href="{{ route('courses') }}" class="btn btn-secondary mx-2"><i class="bi bi-arrow-left"> Go back</i></a>
                    <div class="course-item bg-light">
                        <!-- Course Image -->
                        <div class="position-relative overflow-hidden text-center">
                            <img class="img-fluid" src="{{ asset('storage/' . $course->course_image) }}"
                                alt="{{ $course->course_title }}" style="max-height: 400px; width: auto;">
                        </div>

                        {{-- <!-- Embed Livewire Component Here -->
                        @livewire('course-payment', ['course' => $course]) --}}

                        <!-- Course Description -->
                        <div class="p-4">
                            {!! $course->course_description !!}
                             <h4>Investment:</h4><h3 class="mb-0">₦{{ number_format($course->course_price_ngn, 2) }}
                            (${{ number_format($course->course_price_usd, 2) }})</h3><br>
                             {!! $course->course_description2 !!}
                            <!-- Payment Buttons -->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                                <a class="btn btn-success btn-lg fixed-btn" href="{{ $course->pay_link }}">Pay Now via Paystack</a>
                                {{-- @if ($course->selar_link)
                                <a class="btn btn-success btn-lg" href="{{ $course->selar_link }}">Pay Now via Selar</a>
                                @endif --}}
                                <a href="{{ $course->register_link }}" class="btn btn-primary btn-lg fixed-btn">Register Here</a>
                            </div>
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
