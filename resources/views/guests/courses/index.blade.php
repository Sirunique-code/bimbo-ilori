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
                    <img class="img-fluid" src="{{ asset('assets/img/thriveforge-logo.png') }}" alt="ThriveForge Coaching"
                        style="width: 100%; max-width: 400px; height: auto; object-fit: contain;">
                </div>
                <!-- Content Section (Left) -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">THRIVEFORGE</h6>
                    <h1 class="mb-1">Coaching and Courses</h1>
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


    <!-- Bimbo Ilori Books Link
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
    </div> -->


    <!-- Bimbo Ilori Books link End-->


    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Column: Image -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded w-100 h-100" src="{{ asset('assets/img/session.jpg') }}"
                        alt="Book-Session">
                </div>

                <!-- Right Column: Content -->
                <div class="col-md-6">
                    <h2 class="mb-3">Book a Session with Bimbo Ilori</h2>
                    <p class="mb-4">
                        Whether you need clarity or deep strategic insight, our tailored sessions are designed to
                        empower you.
                        Book a session or check our calendar to see upcoming events and workshops.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="{{ url('/book-session') }}" class="btn btn-primary">
                            Book a Session
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Bimbo Ilori Books link End-->

    <!-- KBLOC: Consults and Training Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-center justify-content-center">
                <!-- KBLOC Content -->
                <div class="col-lg-8 wow fadeInUp text-center" data-wow-delay="0.3s">

                    <!-- Section Heading -->
                    <h3 class="text-primary fw-bold mb-4">Consults and Training</h3>

                    <!-- KBloc Logo -->
                    <img src="{{ asset('assets/img/kbloc.jpg') }}" alt="KBloc Consults" class="img-fluid mb-3"
                        style="max-width: 200px;">

                    <!-- KBloc Title -->
                    <h3 class="fw-bold mb-4">Kingswitbloc (KBloc)</h3>

                    <!-- Description -->
                    <p>Kingswitbloc (KBloc) is our registered brand for Consult Services, that channels my skills and
                        expertise as a Chartered Administrator and entrepreneur with ample years of experience.</p>
                    <p>This intertwines with the capacity development propensity, to support businesses alignment,
                        improvement, direction, and better positioning.</p>
                    <p>Your business or startup stands to gain immense insight and strength from this service. Take
                        advantage of the opportunity now!</p>

                    <!-- CTA Button -->
                    <a href="https://forms.gle/G8iiparxyrnPRgUz8" class="btn btn-primary btn-lg px-4">
                        REQUEST FOR CONSULTS / TRAINING HERE
                    </a>
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
                    <a href="https://open.spotify.com/show/7iwYHW0a9gsFQeNRIQOErH?si=bOyVq0sWRaiPa5xlvjtrNA"
                        class="btn btn-primary mt-3">LISTEN
                        HERE</a>
                </div>
                <!-- Podcast Image -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded w-100 h-100" src="{{ asset('assets/img/podcast.jpg') }}"
                        alt="BI Podcasts">
                </div>
            </div>
        </div>
    </div>

    <!-- Partner with BIPs Section -->
    <section class="py-5" id="partner">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">✨ Partner with BIPs</h2>
                <p class="text-muted">
                    We invite you to collaborate with us in expanding reach and creating lasting transformation.
                </p>
            </div>

            <div class="row g-4">
                <!-- Opportunity 1 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">1. SOLT Podcasts Sponsorship</h5>
                            <p class="card-text">
                                Support spirit-led, life-enriching conversations for greater reach across digital
                                platforms.
                                Your sponsorship will amplify our voice, enabling thousands more to access wisdom and
                                hope.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Opportunity 2 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">2. Publishing & Book Distribution Support</h5>
                            <p class="card-text">
                                Augment the production and wider circulation of Bimbo Ilori’s books, making them more
                                accessible
                                at affordable or no cost.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Opportunity 3 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">3. Sponsored Masterclass Slots</h5>
                            <p class="card-text">
                                Fund scholarships for individuals, parents, and leaders to access coaching and
                                masterclasses.
                                With your support, participants who cannot afford it will gain transformative knowledge
                                and tools.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Join Us -->
            <div class="text-center mt-5">
                <h4 class="fw-bold">🌍 Join Us</h4>
                <p class="text-muted">
                    Together, we can inspire lives, strengthen families, empower organizations,
                    and raise tomorrow’s leaders.
                </p>

                <!-- Action Buttons -->
                <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-3">
                    <a href="https://forms.gle/LRnbUccqqDvSdWjd6" target="_blank"
                        class="btn btn-primary btn-lg px-4">
                        Fill Partnership Form
                    </a>
                    <button class="btn btn-outline-dark btn-lg px-4" data-bs-toggle="modal"
                        data-bs-target="#donationModal">
                        Make a Donation
                    </button>
                </div>
            </div>
            <div style="margin-bottom: 40px">

            </div>
        </div>

        <!-- Donation Modal -->
        <div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow"> <!-- ✅ Added modal-content wrapper -->

                    <div class="modal-header bg-primary text-white">
                        <img src="assets/img/gtbank-seeklogo.svg" alt="GTBank Logo" style="height: 30px;"
                            class="me-2">
                        <h5 class="modal-title" id="donationModalLabel">One-Off Donation Details</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <div class="modal-body text-center">
                        <p><strong>Bank:</strong> GTBank</p>
                        <p><strong>Account Name:</strong> Kingswitbloc</p>
                        <p>
                            <strong>Account Number:</strong>
                            <span id="accountNumber">0598217241</span>
                            <button class="btn btn-sm btn-outline-primary ms-2" onclick="copyAccountNumber()">
                                Copy
                            </button>
                        </p>
                        <small class="text-muted">Use these details to make your support count.</small>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>

                </div> <!-- end modal-content -->
            </div>
        </div>


        <!-- Toast Notification -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1100">
            <div id="copyToast" class="toast align-items-center text-bg-success border-0" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        ✅ Account number copied to clipboard!
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>

        <!-- Upcoming Events Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <!-- Section Heading -->
                <div class="text-center mb-4">
                    <h2 class="fw-bold">📅 Upcoming Events from <span class="text-primary">Bimbo Ilori Programs</span>
                    </h2>
                    <p class="text-muted">
                        Stay updated with all upcoming programs, workshops, and special events.
                        Check the calendar below and mark your dates!
                    </p>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-3">
                    <a href="{{ route('calendar') }}" target="_blank"
                        class="btn btn-primary btn-lg px-4">
                        Go to Calendar
                    </a>
                    
                </div>

            </div>
            </div>
            </div>
            </div>
        </section>

        <!-- Copy Script -->
        <script>
            function copyAccountNumber() {
                const accountNumber = document.getElementById("accountNumber").innerText;
                navigator.clipboard.writeText(accountNumber).then(() => {
                    // Show toast
                    const toastEl = document.getElementById("copyToast");
                    const toast = new bootstrap.Toast(toastEl);
                    toast.show();
                }).catch(err => {
                    console.error("Error copying text: ", err);
                });
            }
        </script>

    </section>

</x-guest-layout>
