<x-guest-layout>
    <style>
        .category-card {
            transition: all 0.3s ease;
            background-color: #ffffff;
            text-decoration: none !important;
        }
        .category-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(63, 32, 127, 0.15) !important;
            border-color: #3F207F !important;
        }
        .insight-section {
            scroll-margin-top: 100px;
        }
        .insight-badge {
            background-color: rgba(63, 32, 127, 0.1);
            color: #3F207F;
            font-weight: 600;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
        }
        .insight-card {
            transition: all 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
        }
        .insight-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.12) !important;
        }
        .btn-purple {
            background-color: #3F207F;
            color: #ffffff;
            border: none;
        }
        .btn-purple:hover {
            background-color: #2b1559;
            color: #ffffff;
        }
        .copy-link-btn {
            cursor: pointer;
            transition: background-color 0.2s ease;
        }
    </style>

    <!-- Header Banner Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header" style="background-color: #3F207F !important;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Purpose Insights</h1>
                    <p class="text-white-50 fs-5 mb-4 animated slideInDown">Understanding Purpose. Living It Fully.</p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('welcome') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Resources</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Purpose Insight</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Banner End -->

    <!-- Intro & Purpose Philosophy Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center justify-content-center">
                <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center mb-4">
                        <h6 class="section-title bg-white text-center text-primary px-3">Philosophy & Vision</h6>
                        <h2 class="mb-3 text-dark fw-bold" style="color: #3F207F !important;">Understanding Purpose. Living It Fully.</h2>
                        <div class="mx-auto" style="width: 80px; height: 3px; background-color: #E4B548; margin-bottom: 25px;"></div>
                    </div>
                    
                    <div class="p-4 p-md-5 bg-light rounded-3 shadow-sm border-start border-4 border-primary" style="border-left-color: #3F207F !important;">
                        <p class="lead text-dark fs-5 mb-4">
                            <strong>Purpose</strong> is more than discovering what you are called to do. It is becoming the person God is shaping you to be and learning to live intentionally in every area of life.
                        </p>
                        <p class="text-muted fs-6 mb-3">
                            At <strong>BIPPs</strong>, we believe purposeful living is holistic. It is formed through spiritual growth, personal development, healthy relationships, wise leadership, faithful stewardship, resilience, discernment, and continual alignment with God's principles.
                        </p>
                        <p class="text-muted fs-6 mb-3">
                            For this reason, <strong>Purpose Insights</strong> is organised into carefully curated areas of growth. Each category explores an essential dimension of purposeful living through biblical reflections, practical wisdom, and life-applicable principles.
                        </p>
                        <p class="text-muted fs-6 mb-4">
                            Whether you are seeking clarity, navigating a new season, strengthening your faith, leading others, building relationships, overcoming challenges, or pursuing personal growth, these insights are designed to equip you for the journey.
                        </p>
                        <div class="p-3 bg-white rounded-2 border text-center">
                            <span class="fst-italic text-dark fw-medium">
                                "Together, these interconnected themes provide a comprehensive framework for discovering, developing, and fulfilling God's purpose for your life."
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Explore by Topic Grid Section -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Navigation</h6>
                <h2 class="mb-3">Explore by Topic</h2>
                <h5 class="text-primary fw-semibold mb-3" style="color: #3F207F !important;">Where are you in your purpose journey?</h5>
                <p class="text-muted col-lg-8 mx-auto">
                    Every season presents different questions, challenges, and opportunities for growth. Begin by selecting the area that best reflects where you are today, then explore the insights, books, podcasts, and programmes designed to help you move forward with greater clarity and confidence.
                </p>
            </div>

            <!-- Categories 12-Card Grid -->
            <div class="row g-3 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                <!-- Column 1 (Categories 1 to 6) -->
                <div class="col-md-6">
                    <!-- 1. FAITH DEVELOPMENT TITLES -->
                    <a href="{{ route('books.index') }}#faith-development" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/category44.png') }}" alt="Faith Development" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            <div>
                                <h6 class="mb-1 fw-bold text-dark">Faith Development</h6>
                                <small class="text-muted">The Faith Rise Series</small>
                            </div>
                        </div>
                    </a>

                    <!-- 2. PURPOSE DEVELOPMENT TITLES -->
                    <a href="{{ route('books.index') }}#purpose-development" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/category12.jpg') }}" alt="Purpose Development" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            <div>
                                <h6 class="mb-1 fw-bold text-dark">Purpose & Personal Discovery</h6>
                                <small class="text-muted">The Purpose Series</small>
                            </div>
                        </div>
                    </a>

                    <!-- 3. PARENTING SKILL DEVELOPMENT TITLES -->
                    <a href="{{ route('books.index') }}#parenting-skill-development" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/category110.png') }}" alt="Parenting Skill Development" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            <div>
                                <h6 class="mb-1 fw-bold text-dark">Parenting & Child Development</h6>
                                <small class="text-muted">The Parenting Series</small>
                            </div>
                        </div>
                    </a>

                    <!-- 4. WELLNESS AND BALANCE TITLES -->
                    <a href="{{ route('books.index') }}#wellness-and-balance" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/category83.png') }}" alt="Wellness and Balance" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            <div>
                                <h6 class="mb-1 fw-bold text-dark">Health, Wellness & Lifestyle</h6>
                                <small class="text-muted">The Wellness Series</small>
                            </div>
                        </div>
                    </a>

                    <!-- 5. OVERCOMERS' TITLES -->
                    <a href="{{ route('books.index') }}#overcomers" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/category61.jpg') }}" alt="Overcomers" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            <div>
                                <h6 class="mb-1 fw-bold text-dark">Overcoming Obstacles & Resilience</h6>
                                <small class="text-muted">The Overcomer Series</small>
                            </div>
                        </div>
                    </a>

                    <!-- 6. REDEMPTIVE POWER TITLES -->
                    <a href="{{ route('books.index') }}#redemptive-power" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
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
                    <a href="{{ route('books.index') }}#business-development" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/category72.jpg') }}" alt="Business Development" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            <div>
                                <h6 class="mb-1 fw-bold text-dark">Business & Entrepreneurship</h6>
                                <small class="text-muted">The Business Insight Series</small>
                            </div>
                        </div>
                    </a>

                    <!-- 8. LEADERSHIP UPLIFT TITLES -->
                    <a href="{{ route('books.index') }}#leadership-uplift" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/category23.jpg') }}" alt="Leadership Uplift" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            <div>
                                <h6 class="mb-1 fw-bold text-dark">Leadership & Influence</h6>
                                <small class="text-muted">The Leadership Skill Series</small>
                            </div>
                        </div>
                    </a>

                    <!-- 9. RELATIONSHIP UPSKILL TITLES -->
                    <a href="{{ route('books.index') }}#relationship-upskill" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/category90.jpg') }}" alt="Relationship Upskill" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            <div>
                                <h6 class="mb-1 fw-bold text-dark">Relationships, Love & Emotional Wholeness</h6>
                                <small class="text-muted">The Relationship Series</small>
                            </div>
                        </div>
                    </a>

                    <!-- 10. SPIRITUAL & PERSONAL SKILL DEVELOPMENT TITLES -->
                    <a href="{{ route('books.index') }}#spiritual-personal-skill-development" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/category102.jpg') }}" alt="Spiritual & Personal Skill Development" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            <div>
                                <h6 class="mb-1 fw-bold text-dark">Personal Effectiveness & Life Skills</h6>
                                <small class="text-muted">The Personal Skills Series</small>
                            </div>
                        </div>
                    </a>

                    <!-- 11. THE INSIGHT SERIES -->
                    <a href="{{ route('books.index') }}#the-insight-series" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/category123.jpg') }}" alt="The Insight Series" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            <div>
                                <h6 class="mb-1 fw-bold text-dark">Insight, Discernment & Wisdom</h6>
                                <small class="text-muted">The Insight Series</small>
                            </div>
                        </div>
                    </a>

                    <!-- 12. MARRIAGE ENRICHMENT TITLES -->
                    <a href="{{ route('books.index') }}#marriage-enrichment" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
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
        </div>
    </div>

    <!-- Purpose Insights Articles / Blog Posts Feed -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Latest Posts & Reflections</h6>
                <h2 class="mb-3">Purpose Insights Articles</h2>
                <p class="text-muted col-lg-8 mx-auto">
                    Explore our recent reflections, wisdom keys, and practical growth articles. Share specific post links directly across your social platforms.
                </p>
            </div>

            <!-- 1. FAITH DEVELOPMENT SECTION -->
            <div id="faith-development" class="insight-section mb-5 pt-4">
                <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-4">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('storage/category44.png') }}" alt="Faith Development" class="me-3 rounded shadow-sm" style="width: 45px; height: 60px; object-fit: cover;">
                        <div>
                            <h3 class="fw-bold mb-0 text-dark">Faith Development</h3>
                            <small class="text-primary fw-semibold">The Faith Rise Series</small>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill copy-link-btn" onclick="copySectionLink('faith-development')">
                        <i class="fa fa-share-alt me-1"></i> Share Topic
                    </button>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm insight-card">
                            <div class="card-body p-4">
                                <span class="insight-badge mb-3 d-inline-block">Faith Rise</span>
                                <h5 class="card-title fw-bold mb-3">Building Unshakable Faith in Trying Seasons</h5>
                                <p class="card-text text-muted">Discover foundational biblical principles for standing firm when tests and challenges push your faith to the limit.</p>
                            </div>
                            <div class="card-footer bg-white border-0 p-4 pt-0 d-flex align-items-center justify-content-between">
                                <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> Latest Insight</small>
                                <a href="{{ route('books.index') }}" class="btn btn-sm btn-purple rounded-pill px-3">Explore Books</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Subscriber Notification & Social Share Banner -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="p-5 rounded-4 shadow-sm text-white" style="background: linear-gradient(135deg, #3F207F 0%, #151c23 100%);">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-4 mb-lg-0">
                        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">Stay Updated</span>
                        <h2 class="text-white fw-bold mb-3">Subscribe to Purpose Insights</h2>
                        <p class="text-white-50 mb-0 fs-6">
                            Receive the latest purpose reflections, wisdom articles, book releases, and podcast notifications directly in your inbox. Share these posts with friends and social media networks.
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <form id="purpose-newsletter-form" action="{{ route('subscribe') }}" method="POST">
                            @csrf
                            <div class="input-group mb-2">
                                <input type="email" name="email" class="form-control py-3 ps-4 border-0 rounded-start" placeholder="Enter your email address" required>
                                <button type="submit" class="btn btn-warning fw-bold px-4">Subscribe</button>
                            </div>
                        </form>
                        <div id="purpose-message-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copySectionLink(sectionId) {
            const url = window.location.origin + window.location.pathname + '#' + sectionId;
            navigator.clipboard.writeText(url).then(function() {
                alert('Link to ' + sectionId.replace(/-/g, ' ') + ' copied to clipboard! You can now share it on social media.');
            }, function(err) {
                console.error('Could not copy text: ', err);
            });
        }
    </script>
</x-guest-layout>
