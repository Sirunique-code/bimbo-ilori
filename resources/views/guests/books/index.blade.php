<x-guest-layout>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Books by BI</h6>
                {{-- <h1 class="mb-5">Explore Our Collection</h1> --}}
            </div>

            <!-- Before the Loop -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <!-- Content Section (Right) -->
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <h6 class="section-title bg-white text-start text-primary pe-3">Browse and buy Books by Bimbo
                                Ilori</h6>
                            {{-- <h1 class="mb-4">Books by Bimbo Ilori</h1> --}}
                            <p class="mb-4">
                                <strong>Bimbo Ilori</strong> is an inspirational and prolific writer known
                                for distilling complex ideas into simple, transformative insights. With a deep passion
                                for purposeful content, she empowers readers through her writings and actively connects
                                with audiences via social media and impactful community projects.
                            </p>
                            <p class="mb-4">
                                With over <strong>35+ published books</strong> and counting, she covers a wide range of
                                topics, including life purpose, personal development, relationships, and healthy living.
                                These books are published under TKBlocs, labeled as <strong>“Life Purpose and Personal
                                    Development” (LPPD) Books.</strong>
                            </p>
                            <p class="mb-4">
                                You can purchase books by Bimbo Ilori via the platforms below:
                            </p>
                            <div class="d-flex flex-wrap gap-2">
                                <a class="btn btn-warning py-2 px-4 fixed-btn"
                                    href="https://www.amazon.com/stores/author/B08H1B27NT/allbooks?ingress=0&visitId=8194064e-5ba1-46ca-a821-b74cb867697b&ref_=ap_rdr"
                                    target="_blank">Buy via Amazon <br> (Kindle and Paperback)</a>

                                <a class="btn btn-primary py-2 px-4 fixed-btn" href="https://selar.co/m/abimbola-ilori1"
                                    target="_blank">Buy via Selar <br> (Digital Version)</a>

                                <a class="btn btn-success py-2 px-4 fixed-btn"
                                    href="https://paystack.shop/buy-all-digital-books-by-bimbo-ilori"
                                    target="_blank">Buy via Paystack <br> (Digital Version)</a>

                                <a class="btn btn-success py-2 px-4 fixed-btn"
                                    href="https://paystack.shop/all-books-by-bimbo-ilori" target="_blank">Buy via
                                    Paystack <br>(Paperback Edition)</a>
                            </div>
                        </div>
                        <!-- Image Section (Left) -->
                        <div class="position-relative" style="width: 100%; max-width: 500px; height: auto;">
                            <img class="img-fluid" src="{{ asset('assets/img/book-002.png') }}"
                                alt="Books by Bimbo Ilori" style="width: 100%; height: auto; object-fit: contain;">
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- After the Loop -->
        @foreach ($books as $category => $categoryBooks)
            <div class="mb-5 py-4 {{ $loop->index % 2 == 0 ? 'bg-light' : 'bg-white' }}">
                <h5 class="text-center text-white fw-bold py-2 rounded"
                    style="background: linear-gradient(to right, #151c23, #270067);">
                    {{ strtoupper($category) }}
                </h5>

                <!-- Owl Carousel for Smooth Scrolling -->
                <div class="owl-carousel owl-theme book-carousel">
                    @foreach ($categoryBooks as $book)
                        <div class="item">
                            <div class="card shadow-sm h-100 d-flex flex-column justify-content-between">
                                <img src="{{ asset('storage/' . $book->image) }}" class="card-img-top"
                                    alt="{{ $book->title }}">

                                <div class="card-body d-flex flex-column">
                                    <p class="text-center"><strong>{{ $book->title }}:</strong>
                                        {{ Str::limit(strip_tags($book->description), 100, '...') }}</p>

                                    <a href="{{ route('books.show', $book->id) }}"
                                        class="btn btn-sm btn-dark mb-2">Learn More</a>

                                    <!-- Payment Buttons for this book -->
                                    <div class="d-grid gap-2">
                                        @if (!empty($book->bookamazon_link))
                                            <a href="{{ $book->bookamazon_link }}" class="btn btn-warning"
                                                target="_blank">
                                                Buy via Amazon
                                            </a>
                                        @endif

                                        @if (!empty($book->bookselar_link))
                                            <a href="{{ $book->bookselar_link }}" class="btn btn-success"
                                                target="_blank">
                                                Buy Digital Versions via Selar
                                            </a>
                                        @endif

                                        @if (!empty($book->bookpaystackdigital_link))
                                            <a href="{{ $book->bookpaystackdigital_link }}" class="btn btn-primary"
                                                target="_blank">
                                                Buy Digital Versions via Paystack
                                            </a>
                                        @endif

                                        @if (!empty($book->bookpaystack_link))
                                            <a href="{{ $book->bookpaystack_link }}" class="btn btn-primary"
                                                target="_blank">
                                                Buy Paperback Edition via Paystack
                                            </a>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
    </div>

    <!-- Free Book Giveaway Section -->
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-white"> 🎁 TAKE ADVANTAGE OF THE BOOKS BY BI FREE GIVEAWAY 🎁</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card text-dark shadow-sm">
                        <div class="card-body text-center">
                            <a href="{{ route('e-book') }}" target="_blank" class="btn btn-success btn-lg mt-2">
                                📥 Download Free eBook
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Promotional Book Spotlight Section -->
    <section class="py-5" style="background: #f7f7f7;">
        <div class="container">
            <!-- Title & Intro -->
            <h2 class="text-center fw-bold mb-3" style="color: #270067; 
            background: linear-gradient(to right, #ffe3e3, #faea9a);">72-Hour Flash Sale</h2>
            <p class="text-center fs-5 text-danger fw-bold mb-1">Limited Time Offer !!!</p>
            <p class="text-center fs-6 mb-4">August 30th - September 1st, 2025</p>

            <!-- Spotlight Card -->
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-lg border-0">
                        <img src="{{ asset('assets/img/faith-bundle.jpg') }}" class="card-img-top"
                            alt="Faith Development Collection">

                        <div class="card-body text-center">
                            <h4 class="fw-bold text-primary mb-3">THE FAITH DEVELOPMENT COLLECTION</h4>
                            <p class="mb-3">
                                💎 <strong>5 Books to Grow, Stretch & Anchor Your Faith</strong><br>
                                Includes: <em>Faith That Fits</em>, <em>Portals of Faith</em>, <em>100 Characteristics
                                    of Faith</em>, <em>Montage</em>, <em>Unmute</em>
                            </p>

                            <p class="fw-semibold text-dark">
                                Available at a <span class="text-success">special discounted rate</span> for this
                                summer/holiday period.
                            </p>

                            <p class="fw-bold text-danger">
                                ⏳ LIMITED TIME OFFER – 72 HOURS ONLY
                            </p>

                            <!-- Payment Buttons -->
                            <div class="d-flex flex-wrap gap-2 justify-content-center">
                                <a class="btn btn-primary py-2 px-4" href="#" target="_blank">
                                    Buy Digital Version via Paystack
                                </a>

                                <a class="btn btn-success py-2 px-4" href="#" target="_blank">
                                    Buy Paperback Edition via Paystack
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Owl Carousel Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".book-carousel").owlCarousel({
                loop: false,
                margin: 20,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                navText: [
                    "<i class='fas fa-chevron-left'></i>",
                    "<i class='fas fa-chevron-right'></i>"
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>


    <!-- Owl Carousel Styles -->
    <style>
        .book-carousel .item {
            padding: 10px;
        }

        .book-carousel .card {
            height: 100%;
            transition: transform 0.3s;
        }

        .book-carousel .card:hover {
            transform: scale(1.05);
        }

        .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
        }

        .owl-nav button {
            background: rgba(0, 0, 0, 0.5) !important;
            color: white !important;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px !important;
            border: none;
        }

        .owl-nav button:hover {
            background: rgba(0, 0, 0, 0.8) !important;
        }
    </style>
</x-guest-layout>
