<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5">Popular Courses</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($courses as $course)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->iteration }}s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/'.$course->course_image) }}" alt="{{ $course->course_title }}">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-sm btn-primary px-3 border-end">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">${{ number_format($course->course_price_usd, 2) }} (₦{{ number_format($course->course_price_ngn, 2) }})</h3>
                            <div class="mb-3">
                                @for($i = 0; $i < 5; $i++)
                                    <small class="fa fa-star text-primary"></small>
                                @endfor
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-2">{{ $course->course_title }}</h5>
                            <p class="text-muted">{{ Str::limit(strip_tags($course->course_description), 100, '...') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>