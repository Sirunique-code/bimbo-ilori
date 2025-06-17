<x-guest-layout>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Impact Programs</h6>
                {{-- <h1 class="mb-5">Explore Our Collection</h1> --}}
            </div>

            <!-- The 5-V Anchors of Purpose -->
            <section class="text-center my-5" style="margin-top: -100px">
                {{-- <h2 class="fw-bold">Enriching Lives, Enabling Purpose </h2> --}}
                <p>BIPs (Bimbo Ilori Programs) is excited to offer a suite of innovative programs and services tailored
                    to meet the unique needs of individuals and organizations.
                    Browse our programs below and take the first step towards achieving your goals.</p>
            </section>


            <div class="row g-5 align-items-center">

                <!-- Image Section (Right) -->
                <div class="col-lg-6 text-center">
                    <img class="img-fluid" src="{{ asset('assets/img/thriveforge-logo.png') }}"
                        alt="ThriveForge Coaching"
                        style="width: 100%; max-width: 400px; height: auto; object-fit: contain;">
                </div>
                <!-- Content Section (Left) -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">THRIVEFORGE</h6>
                    <h1 class="mb-1">Coaching and Consults</h1>
                      <span class="fst-italic">Equipping for transformational impact…..</span> <br><br>
                    <p class="mb-4">
                        Coaching and Courses are available through our <strong> ThriveForge Impact Hub</strong>,
                        empowering individuals and organizations to discover and develop their purpose. The program
                        emphasizes coordinated, virtue-derived, and value-driven growth, covering key areas such as:
                    </p>
                    <ul class="mb-4">
                        <li><strong>Life & Clarity Track</strong></li>
                        <li><strong>Family & Relationship Track</strong></li>
                        <li><strong>Personal Growth & Identity Track</strong></li>
                        <li><strong>Leadership Track</strong></li>
                    </ul>
                    <p class="fw-bold">
                        The Tracks feature both intensives and frameworks tailored for deep and lasting transformation.
                        <br>
                    </p>

                </div>
            </div>
        </div>
    </div>


    <div class="row g-4 justify-content-center">
        @foreach ($courses as $course)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->iteration }}s">
                <div class="course-item bg-light">
                    <h6 class="py-2 ps-3">{{ $course->course_track }}</h6>
                    <div class="position-relative overflow-hidden">

                        <img class="img-fluid"
                            src="{{ $course->course_image ? asset('storage/' . $course->course_image) : asset('default-image.jpg') }}"
                            alt="{{ $course->course_title }}">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="{{ route('courses.show', $course->id) }}"
                                class="btn btn-sm btn-primary px-3 border-end">Read More</a>
                            <a href="{{ $course->pay_link }}" class="btn btn-sm btn-success px-3"
                                style="border-radius: 0 30px 30px 0;">Pay here</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h5 class="mb-0">₦{{ number_format($course->course_price_ngn, 2) }}
                            (${{ number_format($course->course_price_usd, 2) }})
                        </h5>
                        <div class="mb-3">

                        </div>
                        <h3 class="mb-2">{{ $course->course_title }}</h3>
                        <h6 class="text-muted pb-3">
                            {{ Str::limit(strip_tags($course->course_description), 100, '...') }}</h6>
                    </div>
                </div>
            </div>
        @endforeach
        <h3 class="text-center"> Choose your track. Begin your transformation. Join the movement today.</h3>
    </div>


    <!-- Bimbo Ilori Books Link -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <div class="mb-4">
                    <img src="{{ asset('assets/img/legacy2.jpg') }}" class="img-fluid rounded shadow-sm"
                        alt="Books and Writing" style="max-width: 500px; width: 100%; height: auto;">
                </div>
                <p class="mt-3">
                    You can purchase books by Bimbo Ilori via the platforms below:
                </p>

                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-3">
                    <a href="https://www.amazon.com/stores/author/B08H1B27NT/allbooks?ingress=0&visitId=5654739c-d56f-4060-a86d-1fad5cc99e66&ref_=ap_rdr"
                        class="btn btn-primary equal-width-btn">Buy via Amazon <br> (Kindle and Paperback)</a>

                    <a href="https://selar.co/m/abimbola-ilori1" class="btn btn-success equal-width-btn">Buy via Selar
                        <br> (Digital Version)</a>

                    <a href="https://paystack.shop/all-books-by-bimbo-ilori" class="btn btn-warning equal-width-btn">Buy
                        via Paystack <br> (Digital Version)</a>
                    <a href="https://paystack.shop/all-books-by-bimbo-ilori" class="btn btn-warning equal-width-btn">Buy
                        via
                        Paystack <br>(Paperback Edition)</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bimbo Ilori Books link End-->

    <!-- KBLOC: Consults and Training Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <!-- KBLOC Image -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded fixed-height" src="{{ asset('assets/img/kbloc.jpg') }}"
                        alt="KBloc Consults">
                </div>
                <!-- KBLOC Content -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary px-3">Consults and Training</h6>
                    <h2 class="mb-4">Kingswitbloc (KBloc)</h2>
                    <p>Kingswitbloc (KBloc) is our registered brand for Consult Services, that channels my skills and
                        expertise as a Chartered Administrator and entrepreneur with ample years of experience.</p>
                    <p>This intertwines with the capacity development propensity, to support businesses alignment,
                        improvement, direction, and better positioning.</p>
                    <p>Your business or startup stands to gain immense insight and strength from this service. Take
                        advantage of the opportunity now!</p>
                    <a href="https://forms.gle/G8iiparxyrnPRgUz8" class="btn btn-primary mt-3">REQUEST FOR CONSULTS /
                        TRAINING HERE</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Podcasts and Teachings Section -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="row g-4 align-items-center">
                <!-- Podcast Content -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary px-3">Podcasts and Teachings</h6>
                    <h2 class="mb-4">Listen to BI on Spotify</h2>
                    <p>Listen to BI deliver transformative and uplifting insights on Spotify. She shares insights that
                        challenge and drive listeners to embrace spiritual and personal development.</p>
                    <a href="https://creators.spotify.com/pod/show/bimbo-ilori" class="btn btn-primary mt-3">LISTEN
                        HERE</a>
                </div>
                <!-- Podcast Image -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded fixed-height" src="{{ asset('assets/img/podcast.jpg') }}"
                        alt="BI Podcasts">
                </div>
            </div>
        </div>
    </div>


</x-guest-layout>
