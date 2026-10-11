<x-guest-layout>
    @php
    $allCategories = [
        'Faith Development' => [
            'series' => 'The Faith Rise Series',
            'image' => 'storage/category44.png',
        ],
        'Purpose & Personal Discovery' => [
            'series' => 'The Purpose Series',
            'image' => 'storage/category12.jpg',
        ],
        'Parenting & Child Development' => [
            'series' => 'The Parenting Series',
            'image' => 'storage/category110.png',
        ],
        'Health, Wellness & Lifestyle' => [
            'series' => 'The Wellness Series',
            'image' => 'storage/category83.png',
        ],
        'Overcoming Obstacles & Resilience' => [
            'series' => 'The Overcomer Series',
            'image' => 'storage/category61.jpg',
        ],
        'Redemption & Restoration' => [
            'series' => 'The Redemption Series',
            'image' => 'storage/category31.jpg',
        ],
        'Business & Entrepreneurship' => [
            'series' => 'The Business Insight Series',
            'image' => 'storage/category72.jpg',
        ],
        'Leadership & Influence' => [
            'series' => 'The Leadership Skill Series',
            'image' => 'storage/category23.jpg',
        ],
        'Relationships, Love & Emotional Wholeness' => [
            'series' => 'The Relationship Series',
            'image' => 'storage/category90.jpg',
        ],
        'Personal Effectiveness & Life Skills' => [
            'series' => 'The Personal Skills Series',
            'image' => 'storage/category102.jpg',
        ],
        'Insight, Discernment & Wisdom' => [
            'series' => 'The Insight Series',
            'image' => 'storage/category123.jpg',
        ],
        'Marriage & Family Life' => [
            'series' => 'The Marriage Series',
            'image' => 'storage/category52.jpg',
        ]
    ];
    @endphp

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
        .insight-card {
            transition: all 0.3s ease;
            border-radius: 14px;
            overflow: hidden;
            background: #ffffff;
        }
        .insight-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 28px rgba(0,0,0,0.1) !important;
        }
        .insight-card img {
            transition: transform 0.4s ease;
        }
        .insight-card:hover img {
            transform: scale(1.04);
        }
        .btn-purple {
            background-color: #3F207F;
            color: #ffffff;
            border: none;
            transition: all 0.2s ease;
        }
        .btn-purple:hover {
            background-color: #2b1559;
            color: #ffffff;
            transform: translateY(-1px);
        }
        .hover-primary:hover {
            color: #3F207F !important;
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
                <h6 class="section-title bg-white text-center text-primary px-3">Curriculum & Series</h6>
                <h2 class="mb-3">Explore by Topic</h2>
                <h5 class="text-primary fw-semibold mb-3" style="color: #3F207F !important;">Where are you in your purpose journey?</h5>
                <p class="text-muted col-lg-8 mx-auto">
                    Every season presents different questions, challenges, and opportunities for growth. Begin by selecting the area that best reflects where you are today, then explore the insights, books, podcasts, and programmes designed to help you move forward with greater clarity and confidence.
                </p>
            </div>

            <!-- Categories 12-Card Grid -->
            <div class="row g-3 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                @php
                    $categoriesList = array_chunk($allCategories, 6, true);
                @endphp
                @foreach($categoriesList as $chunk)
                    <div class="col-md-6">
                        @foreach($chunk as $cName => $cData)
                            <a href="#recent-articles" class="category-card d-block p-2 border rounded-3 shadow-sm mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset($cData['image']) }}" alt="{{ $cName }}" class="me-3" style="width: 50px; height: 70px; object-fit: cover; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                        <div>
                                            <h6 class="mb-1 fw-bold text-dark">{{ $cName }}</h6>
                                            <small class="text-muted">{{ $cData['series'] }}</small>
                                        </div>
                                    </div>
                                    <span class="text-muted small me-2">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Purpose Insights Articles / Blog Posts Feed -->
    <div class="container-xxl py-5" id="recent-articles">
        <div class="container">
            <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Latest Posts & Reflections</h6>
                <h2 class="mb-3">Recent Articles</h2>
                <p class="text-muted col-lg-8 mx-auto">
                    Explore our recent reflections, wisdom keys, and practical growth articles. New posts appear here with the latest published on top.
                </p>
            </div>

            <!-- Recent Articles Grid (All Latest Posts) -->
            @if($latestInsights->count() > 0)
                <div class="row g-4 mb-4">
                    @foreach($latestInsights as $insight)
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="card h-100 border-0 shadow-sm insight-card d-flex flex-column">
                                @if($insight->image)
                                    <div class="position-relative overflow-hidden" style="height: 220px;">
                                        <a href="{{ route('purpose-insight.show', $insight->slug) }}">
                                            <img src="{{ asset('storage/' . $insight->image) }}" 
                                                 alt="{{ $insight->title }}" 
                                                 class="w-100 h-100" 
                                                 style="object-fit: cover;">
                                        </a>
                                        <span class="position-absolute top-0 start-0 m-3 badge bg-primary text-white px-3 py-2 rounded-pill shadow-sm" style="background-color: #3F207F !important;">
                                            {{ $insight->category }}
                                        </span>
                                    </div>
                                @else
                                    <div class="p-4 text-white d-flex align-items-center justify-content-between" style="background: linear-gradient(135deg, #3F207F 0%, #5B32AC 100%); min-height: 140px;">
                                        <div>
                                            <span class="badge bg-warning text-dark mb-2 px-2 py-1 rounded-pill">{{ $insight->category }}</span>
                                            <h6 class="text-white-50 mb-0"><i class="fa fa-book-open me-1"></i> Purpose Reflection</h6>
                                        </div>
                                        <i class="fa fa-quote-right fa-2x text-white-50"></i>
                                    </div>
                                @endif

                                <div class="card-body p-4 d-flex flex-column flex-grow-1">
                                    <div class="d-flex align-items-center gap-2 mb-2 text-muted small">
                                        <span><i class="far fa-calendar-alt me-1"></i> {{ ($insight->published_at ?? $insight->created_at)->format('M d, Y') }}</span>
                                        <span>•</span>
                                        <span><i class="far fa-clock me-1"></i> {{ ceil(str_word_count(strip_tags($insight->content)) / 200) }} min read</span>
                                    </div>

                                    <h5 class="card-title fw-bold mb-3">
                                        <a href="{{ route('purpose-insight.show', $insight->slug) }}" class="text-dark text-decoration-none hover-primary">
                                            {{ $insight->title }}
                                        </a>
                                    </h5>

                                    @if($insight->opening_tip)
                                        <p class="card-text text-muted small mb-3 fst-italic">
                                            "{{ Str::limit($insight->opening_tip, 120) }}"
                                        </p>
                                    @else
                                        <p class="card-text text-muted small mb-3">
                                            {{ Str::limit(strip_tags($insight->content), 120) }}
                                        </p>
                                    @endif

                                    <div class="mt-auto pt-3 border-top d-flex align-items-center justify-content-between">
                                        <a href="{{ route('purpose-insight.show', $insight->slug) }}" class="btn btn-sm btn-purple rounded-pill px-3">
                                            Read Article <i class="fa fa-arrow-right ms-1"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-secondary rounded-circle" 
                                                style="width: 32px; height: 32px; padding: 0;"
                                                title="Share Post"
                                                onclick="copyArticleLink('{{ route('purpose-insight.show', $insight->slug) }}', '{{ addslashes($insight->title) }}')">
                                            <i class="fa fa-share-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-5">
                    <div class="p-5 bg-light rounded-4 shadow-sm d-inline-block" style="max-width: 500px;">
                        <i class="fa fa-feather-alt fa-3x text-muted mb-3"></i>
                        <h4 class="fw-bold text-dark">No Articles Published Yet</h4>
                        <p class="text-muted mb-0">Check back soon for fresh insights, reflections, and growth keys.</p>
                    </div>
                </div>
            @endif
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
        function copyArticleLink(articleUrl, title) {
            navigator.clipboard.writeText(articleUrl).then(function() {
                alert('Link to "' + title + '" copied to clipboard! You can now share it on social media.');
            }, function(err) {
                console.error('Could not copy text: ', err);
            });
        }
    </script>
</x-guest-layout>
