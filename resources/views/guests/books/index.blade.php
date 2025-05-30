<x-guest-layout>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Books</h6>
                <h1 class="mb-5">Explore Our Collection</h1>
            </div>

            <!-- Before the Loop -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <!-- Content Section (Right) -->
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <h6 class="section-title bg-white text-start text-primary pe-3">BIMBO ILORI</h6>
                            <h1 class="mb-4">Explore Books by Bimbo Ilori</h1>
                            <p class="mb-4">
                                <strong>Bimbo Ilori</strong> is an inspirational and prolific writer whose works help
                                readers grasp complex ideas with simplicity and clarity.
                                She is deeply passionate about her content and actively engages audiences through social
                                media and community projects.
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
                                <a class="btn btn-warning py-2 px-4"
                                    href="https://www.amazon.com/stores/author/B08H1B27NT/allbooks?ingress=0&visitId=8194064e-5ba1-46ca-a821-b74cb867697b&ref_=ap_rdr"
                                    target="_blank">Buy via Amazon (Kindle Tablet and Paperback)</a>
                                <a class="btn btn-primary py-2 px-4" href="https://selar.co/m/abimbola-ilori1"
                                    target="_blank">Buy via Selar (digital copies)</a>
                                <a class="btn btn-success py-2 px-4"
                                    href="https://paystack.shop/buy-all-digital-books-by-bimbo-ilori" target="_blank">Buy via
                                    Paystack (Digital Copies)</a>
                                <a class="btn btn-success py-2 px-4"
                                    href="https://paystack.shop/all-books-by-bimbo-ilori" target="_blank">Buy via
                                    Paystack (Hard Copies)</a>
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
                                            <a href="{{ $book->bookamazon_link }}" class="btn btn-warning"
                                                target="_blank">Buy via Amazon</a>
                                            <a href="{{ $book->bookselar_link }}" class="btn btn-success"
                                                target="_blank">Buy via Selar</a>
                                            <a href="{{ $book->bookpaystackdigital_link }}" class="btn btn-primary"
                                                target="_blank">Buy Digital copy via Paystack</a>
                                                   <a href="{{ $book->bookpaystack_link }}" class="btn btn-primary"
                                                target="_blank">Buy Hard Copy via Paystack</a>
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

    <!-- Owl Carousel Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".book-carousel").owlCarousel({
                loop: true,
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
