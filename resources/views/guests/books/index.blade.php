<x-guest-layout>
    <!-- Add Smooth Scrolling & Custom Styles -->
    <style>
        html {
            scroll-behavior: smooth;
        }
        /* Prevents fixed navbars from covering the category title when scrolling */
        [id] {
            scroll-margin-top: 100px; 
        }
        /* Attractive Category Card Styling */
.category-card {
    background-color: #fff;
    transition: all 0.3s ease;
    border-left: 4px solid transparent;
    text-decoration: none !important;
    color: inherit;
}

.category-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    border-left-color: #0d6efd; /* Bootstrap primary blue */
    background-color: #f8f9fa;
}

.category-card:hover .text-dark {
    color: #0d6efd !important;
}

.category-card:hover i {
    transform: scale(1.1);
    transition: transform 0.3s ease;
}
    </style>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Books by BI</h6>
            </div>

            <!-- Before the Loop -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <!-- Content Section (Right) -->
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <h6 class="section-title bg-white text-start text-primary pe-3">Browse and buy Books by Bimbo Ilori</h6>
                            
                            <p class="mb-4">
                                <strong>Bimbo Ilori</strong> is an inspirational and prolific writer known for distilling complex ideas into simple, transformative insights. With a deep passion for purposeful content, she empowers readers through her writings and actively connects with audiences via social media and impactful community projects.
                            </p>
                            <p class="mb-4">
                                With over <strong>100+ published books</strong> and counting, she covers a wide range of topics, including life purpose, personal development, relationships, leadership, family life, business, wellness, and faith. These books are published under TKBlocs as <strong>Life Purpose and Personal Development (LPPD) Books.</strong>
                            </p>

                            <!-- ATTRACTIVE CATEGORY LINKS -->
<p class="mb-3 fw-semibold text-dark fs-5">
    <i class="fa fa-compass text-primary me-2"></i>Explore the collection through the categories below:
</p>

<div class="row g-3 mb-4">
    <!-- Column 1 (Categories 1 to 6) -->
    <div class="col-md-6">
        <!-- 1. FAITH DEVELOPMENT TITLES -->
        <a href="#faith-development" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('storage/category44.png') }}" alt="Faith Development" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <div>
                    <h6 class="mb-1 fw-bold text-dark">Faith Development</h6>
                    <small class="text-muted">The Faith Rise Series</small>
                </div>
            </div>
        </a>

        <!-- 2. PURPOSE DEVELOPMENT TITLES -->
        <a href="#purpose-development" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('storage/category12.jpg') }}" alt="Purpose Development" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <div>
                    <h6 class="mb-1 fw-bold text-dark">Purpose & Personal Discovery</h6>
                    <small class="text-muted">The Purpose Series</small>
                </div>
            </div>
        </a>

        <!-- 3. PARENTING SKILL DEVELOPMENT TITLES -->
        <a href="#parenting-skill-development" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('storage/category110.png') }}" alt="Parenting Skill Development" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <div>
                    <h6 class="mb-1 fw-bold text-dark">Parenting & Child Development</h6>
                    <small class="text-muted">The Parenting Series</small>
                </div>
            </div>
        </a>

        <!-- 4. WELLNESS AND BALANCE TITLES -->
        <a href="#wellness-and-balance" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('storage/category83.png') }}" alt="Wellness and Balance" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <div>
                    <h6 class="mb-1 fw-bold text-dark">Health, Wellness & Lifestyle</h6>
                    <small class="text-muted">The Wellness Series</small>
                </div>
            </div>
        </a>

        <!-- 5. OVERCOMERS' TITLES -->
        <a href="#overcomers" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('storage/category61.jpg') }}" alt="Overcomers" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <div>
                    <h6 class="mb-1 fw-bold text-dark">Overcoming Obstacles & Resilience</h6>
                    <small class="text-muted">The Overcomer Series</small>
                </div>
            </div>
        </a>

        <!-- 6. REDEMPTIVE POWER TITLES -->
        <a href="#redemptive-power" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('storage/category31.jpg') }}" alt="Redemptive Power" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <div>
                    <h6 class="mb-1 fw-bold text-dark">Redemption & Restoration</h6>
                    <small class="text-muted">The Redemption Series</small>
                </div>
            </div>
        </a>
    </div>

    <!-- Column 2 (Categories 7 to 12) -->
    <div class="col-md-6">
        <!-- 7. BUSINESS DEVELOPMENT TITLES -->
        <a href="#business-development" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('storage/category72.jpg') }}" alt="Business Development" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <div>
                    <h6 class="mb-1 fw-bold text-dark">Business & Entrepreneurship</h6>
                    <small class="text-muted">The Business Insight Series</small>
                </div>
            </div>
        </a>

        <!-- 8. LEADERSHIP UPLIFT TITLES -->
        <a href="#leadership-uplift" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('storage/category23.jpg') }}" alt="Leadership Uplift" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <div>
                    <h6 class="mb-1 fw-bold text-dark">Leadership & Influence</h6>
                    <small class="text-muted">The Leadership Skill Series</small>
                </div>
            </div>
        </a>

        <!-- 9. RELATIONSHIP UPSKILL TITLES -->
        <a href="#relationship-upskill" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('storage/category90.jpg') }}" alt="Relationship Upskill" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <div>
                    <h6 class="mb-1 fw-bold text-dark">Relationships, Love & Emotional Wholeness</h6>
                    <small class="text-muted">The Relationship Series</small>
                </div>
            </div>
        </a>

        <!-- 10. SPIRITUAL & PERSONAL SKILL DEVELOPMENT TITLES -->
        <a href="#spiritual-personal-skill-development" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('storage/category102.jpg') }}" alt="Spiritual & Personal Skill Development" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <div>
                    <h6 class="mb-1 fw-bold text-dark">Personal Effectiveness & Life Skills</h6>
                    <small class="text-muted">The Personal Skills Series</small>
                </div>
            </div>
        </a>

        <!-- 11. THE INSIGHT SERIES -->
        <a href="#the-insight-series" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('storage/category123.jpg') }}" alt="The Insight Series" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <div>
                    <h6 class="mb-1 fw-bold text-dark">Insight, Discernment & Wisdom</h6>
                    <small class="text-muted">The Insight Series</small>
                </div>
            </div>
        </a>

        <!-- 12. MARRIAGE ENRICHMENT TITLES -->
        <a href="#marriage-enrichment" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('storage/category52.jpg') }}" alt="Marriage Enrichment" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <div>
                    <h6 class="mb-1 fw-bold text-dark">Marriage & Family Life</h6>
                    <small class="text-muted">The Marriage Series</small>
                </div>
            </div>
        </a>
    </div>
</div>
<!-- END ATTRACTIVE CATEGORY LINKS -->
                           
                        </div>
                        
                        <!-- Image Section (Left) -->
                        <div class="position-relative" style="width: 100%; max-width: 500px; height: auto;">
                            <img class="img-fluid" src="{{ asset('assets/img/book-002.png') }}" alt="Books by Bimbo Ilori" style="width: 100%; height: auto; object-fit: contain;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($books as $category => $categoryBooks)
    @php
        // Remove numbers, dots, and "Titles" to create clean slug
        $cleanCategory = preg_replace('/^\d+\.\s*/', '', $category); // Remove "1. ", "2. ", etc.
        $cleanCategory = str_replace(' Titles', '', $cleanCategory); // Remove " Titles"
        $categoryId = Str::slug($cleanCategory);
    @endphp
    
    <div id="{{ $categoryId }}" class="mb-5 py-4 {{ $loop->index % 2 == 0 ? 'bg-light' : 'bg-white' }}">
        <h5 class="text-center text-white fw-bold py-2 rounded" style="background: linear-gradient(to right, #151c23, #270067);">
            {{ strtoupper($category) }}  {{-- This still shows "1. FAITH DEVELOPMENT TITLES" --}}
        </h5>
        

                <!-- Owl Carousel for Smooth Scrolling -->
                <div class="owl-carousel owl-theme book-carousel">
                    @foreach ($categoryBooks as $book)
                        <div class="item">
                            <div class="card shadow-sm h-100 d-flex flex-column justify-content-between">
                                <img src="{{ asset('storage/' . $book->image) }}" class="card-img-top" alt="{{ $book->title }}">

                                <div class="card-body d-flex flex-column">
                                    <p class="text-center"><strong>{{ $book->title }}:</strong> {{ Str::limit(strip_tags($book->description), 100, '...') }}</p>

                                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-dark mb-2">Learn More</a>

                                    <!-- Payment Buttons for this book -->
                                    <div class="d-grid gap-2">
                                        @if (!empty($book->bookamazon_link))
                                            <a href="{{ $book->bookamazon_link }}" class="btn btn-warning" target="_blank">Buy via Amazon</a>
                                        @endif
                                        @if (!empty($book->bookselar_link))
                                            <a href="{{ $book->bookselar_link }}" class="btn btn-success" target="_blank">Buy Digital Versions via Selar</a>
                                        @endif
                                        @if (!empty($book->bookpaystackdigital_link))
                                            <a href="{{ $book->bookpaystackdigital_link }}" class="btn btn-primary" target="_blank">Buy Digital Versions via Paystack</a>
                                        @endif
                                        @if (!empty($book->bookpaystack_link))
                                            <a href="{{ $book->bookpaystack_link }}" class="btn btn-primary" target="_blank">Buy Paperback Edition via Paystack</a>
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

    <!-- Why I Write Section -->
    <section class="py-5 bg-light">
        <!-- ... (Your existing "Why I Write" section remains unchanged) ... -->
    </section>

    <!-- Why Read Books Section -->
    <section class="why-read-books">
        <!-- ... (Your existing "Why Read Books" section remains unchanged) ... -->
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
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 4 }
                }
            });
        });
    </script>

    <!-- Owl Carousel Styles -->
    <style>
        .book-carousel .item { padding: 10px; }
        .book-carousel .card { height: 100%; transition: transform 0.3s; }
        .book-carousel .card:hover { transform: scale(1.05); }
        .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            pointer-events: none; /* Allows clicking through the container */
        }
        .owl-nav button {
            pointer-events: auto; /* Re-enable clicks on buttons */
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
        .owl-nav button:hover { background: rgba(0, 0, 0, 0.8) !important; }
    </style>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for category links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                
                if (target) {
                    // Calculate position accounting for fixed navbar
                    const headerOffset = 100; // Adjust this to match your navbar height
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Update URL without jumping
                    history.pushState(null, null, href);
                }
            }
        });
    });
});
</script>
</x-guest-layout>