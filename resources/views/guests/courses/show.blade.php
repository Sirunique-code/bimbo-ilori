<x-guest-layout>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Course Details</h6>
                <h1 class="mb-5">{{ $course->course_title }}</h1>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden text-center">
                            <img class="img-fluid" src="{{ asset('assets/img/'.$course->course_image) }}" alt="{{ $course->course_title }}" style="max-height: 400px; width: auto;">
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">
                                ${{ number_format($course->course_price_usd, 2) }} 
                                (₦{{ number_format($course->course_price_ngn, 2) }})
                            </h3>
                            <div class="mb-3">
                                @for($i = 0; $i < 5; $i++)
                                    <small class="fa fa-star text-primary"></small>
                                @endfor
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-3">{{ $course->course_title }}</h5>
                        </div>

                        <div class="p-4">
                            {!! $course->course_description !!}  <!-- Display full description -->
                        </div>

                        <div class="text-center pb-4">
                            <a href="{{ $course->pay_link }}" class="btn btn-success btn-lg mx-2">Pay Here</a>
                            <a href="{{ $course->register_link }}" class="btn btn-primary btn-lg mx-2">Register Here</a>
                            <a href="{{ route('courses') }}" class="btn btn-secondary btn-lg mx-2">Back to Courses</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>
