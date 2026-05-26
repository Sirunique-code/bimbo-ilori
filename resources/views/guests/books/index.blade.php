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
                                With over <strong>45+ published books</strong> and counting, she covers a wide range of
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
    
    <!-- Why I Write Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold display-6 text-dark">Why I Write</h2>
            <div class="mx-auto" style="width: 80px; height: 3px; background-color: #6c63ff;"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="p-4 bg-white shadow rounded-4">
                    <div class="mb-4">
                        <h5 class="fw-bold text-primary">1. Instruction</h5>
                        <p>I write from instruction — divinely directed to express truths that must be spoken.</p>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold text-primary">2. Innate</h5>
                        <p>I write from innate ability — a natural grace that finds rhythm in words.</p>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold text-primary">3. Insight</h5>
                        <p>I write with insight — as a vessel for revelations that seek human expression.</p>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold text-primary">4. Inspiration</h5>
                        <p>I write through inspiration — stirred by life, moments, and divine nudges that awaken reflection.</p>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold text-primary">5. Identification (Empathy)</h5>
                        <p>I write from identification and empathy — to touch hearts, heal wounds, and echo unspoken cries.</p>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold text-primary">6. Initiative (Driven Service)</h5>
                        <p>I write by initiative — to take action, respond to needs, and serve with purpose through words.</p>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold text-primary">7. Introspection (Communication + Reflection)</h5>
                        <p>I write for introspection — to communicate deeply, process meaning, and invite others into shared reflection.</p>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold text-primary">8. Innovation (Futuristic or Posterity)</h5>
                        <p>I write with innovation — to preserve truth, inspire growth, and shape thought for generations to come.</p>
                    </div>

                    <div class="text-end mt-4">
                           <p class="fst-italic text-secondary mb-1">“Transforming Lives, Translating Purpose, One Page at a Time.”</p>
                        <h5 class="fw-bold fst-italic text-secondary">— Bimbo Ilori (BI)</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="why-read-books">
  <div class="container">
    <h2>Why You Should Read My Books</h2>
    <p class="intro">
      These books are written to walk with you — offering clarity, healing, and
      purpose through Spirit-led wisdom and timeless truth.
    </p>

    <div class="reasons-grid">
      <div class="reason">
        <h3>Insightful Guidance</h3>
        <p>
          Practical, Spirit-led wisdom that brings clarity to life, purpose,
          and personal growth.
        </p>
      </div>

      <div class="reason">
        <h3>Transformational Truth</h3>
        <p>
          Compassionate and revelatory insights that confront real issues,
          guiding you toward healing, wholeness, and renewed strength.
        </p>
      </div>

      <div class="reason">
        <h3>Purpose Illumination</h3>
        <p>
          Awakens and refines your God-given purpose, helping you walk
          confidently in who you’re called to be.
        </p>
      </div>

      <div class="reason">
        <h3>Emotional & Spiritual Healing</h3>
        <p>
          Gentle words that speak to the heart, giving language to silent
          struggles and comfort to wounded places.
        </p>
      </div>

      <div class="reason">
        <h3>Clarity for Life’s Challenges</h3>
        <p>
          Direction for navigating decisions, relationships, transitions,
          and inner battles.
        </p>
      </div>

      <div class="reason">
        <h3>Faith-Rooted Wisdom</h3>
        <p>
          Timeless scriptural truth made simple, relatable, and deeply
          applicable to everyday life.
        </p>
      </div>

      <div class="reason">
        <h3>Legacy & Leadership</h3>
        <p>
          Strengthens your values, sharpens your character, and empowers
          you to lead a purposeful life and family.
        </p>
      </div>

      <div class="reason">
        <h3>Simplicity with Depth</h3>
        <p>
          Deep revelation expressed in everyday language, often through
          imagery and metaphors that make truth visible and transformative.
        </p>
      </div>

      <div class="reason">
        <h3>A Companion for Your Journey</h3>
        <p>
          Meets you where you are — and helps you rise into who you are
          becoming.
        </p>
      </div>

      <div class="reason">
        <h3>A Gift & a Blessing</h3>
        <p>
          A meaningful gift that brings encouragement, clarity, guidance,
          and a fresh encounter with purpose and truth.
        </p>
      </div>
    </div>

    <blockquote>
      “When you give a book, you give hope, healing, and direction.”
    </blockquote>
  </div>
</section>


    <!-- Free Book Giveaway Section 
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
    </section> -->





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
