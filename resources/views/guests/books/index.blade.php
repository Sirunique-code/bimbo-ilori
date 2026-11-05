<x-guest-layout 
    title="Books by Bimbo Ilori | Life Purpose & Personal Development Library"
    description="Explore 100+ transformational books by Bimbo Ilori covering life purpose, faith, wellness, relationships, business, parenting, and leadership. Available in digital & paperback."
    image="{{ asset('assets/img/book-002.png') }}"
>
    @php
        $seriesMeta = [
            '1. Faith Development Titles' => [
                'name' => 'Faith Development',
                'series' => 'The Faith Rise Series',
                'slug' => 'faith-development',
                'color' => '#3F207F',
                'gradient' => 'linear-gradient(135deg, #3F207F 0%, #5E35B1 100%)',
                'icon' => 'fa-cross',
                'tagline' => 'Unshakable faith, spiritual authority, and supernatural alignment.',
            ],
            '2. Purpose Development Titles' => [
                'name' => 'Purpose & Personal Discovery',
                'series' => 'The Purpose Series',
                'slug' => 'purpose-development',
                'color' => '#1A365D',
                'gradient' => 'linear-gradient(135deg, #1A365D 0%, #2B6CB0 100%)',
                'icon' => 'fa-compass',
                'tagline' => 'Discover, pilot, and anchor your divine assignment with clarity.',
            ],
            '3. Parenting Skill Development Titles' => [
                'name' => 'Parenting & Child Development',
                'series' => 'The Parenting Series',
                'slug' => 'parenting-skill-development',
                'color' => '#0F766E',
                'gradient' => 'linear-gradient(135deg, #0F766E 0%, #0D9488 100%)',
                'icon' => 'fa-child',
                'tagline' => 'Raise remarkable, protected, and purpose-guided children with peace.',
            ],
            '4. Wellness and Balance Titles' => [
                'name' => 'Health, Wellness & Lifestyle',
                'series' => 'The Wellness Series',
                'slug' => 'wellness-and-balance',
                'color' => '#15803D',
                'gradient' => 'linear-gradient(135deg, #15803D 0%, #16A34A 100%)',
                'icon' => 'fa-heartbeat',
                'tagline' => 'Cultivate healthy habits, unburden the mind, and thrive holistically.',
            ],
            '5. Overcomers\' Titles' => [
                'name' => 'Overcoming Obstacles & Resilience',
                'series' => 'The Overcomer Series',
                'slug' => 'overcomers',
                'color' => '#B45309',
                'gradient' => 'linear-gradient(135deg, #B45309 0%, #D97706 100%)',
                'icon' => 'fa-shield-alt',
                'tagline' => 'Translate pain into power, push through resistance, and rise stronger.',
            ],
            '6. Redemptive Power Titles' => [
                'name' => 'Redemption & Restoration',
                'series' => 'The Redemption Series',
                'slug' => 'redemptive-power',
                'color' => '#831843',
                'gradient' => 'linear-gradient(135deg, #831843 0%, #9D174D 100%)',
                'icon' => 'fa-crown',
                'tagline' => 'Live redeemed, release past guilt, and walk in covenant restoration.',
            ],
            '7. Business Development Titles' => [
                'name' => 'Business & Entrepreneurship',
                'series' => 'The Business Insight Series',
                'slug' => 'business-development',
                'color' => '#1E3A8A',
                'gradient' => 'linear-gradient(135deg, #1E3A8A 0%, #2563EB 100%)',
                'icon' => 'fa-chart-line',
                'tagline' => 'Strategic execution, entrepreneurial wisdom, and sustainable impact.',
            ],
            '8. Leadership Uplift Titles' => [
                'name' => 'Leadership & Influence',
                'series' => 'The Leadership Skill Series',
                'slug' => 'leadership-uplift',
                'color' => '#4C1D95',
                'gradient' => 'linear-gradient(135deg, #4C1D95 0%, #6D28D9 100%)',
                'icon' => 'fa-users',
                'tagline' => 'Lead with character, courage, and timeless principled influence.',
            ],
            '9. Relationship Upskill Titles ' => [
                'name' => 'Relationships & Emotional Wholeness',
                'series' => 'The Relationship Series',
                'slug' => 'relationship-upskill',
                'color' => '#BE185D',
                'gradient' => 'linear-gradient(135deg, #BE185D 0%, #E11D48 100%)',
                'icon' => 'fa-heart',
                'tagline' => 'Confront relational blind spots and build intentional, mature bonds.',
            ],
            '10. Spiritual & Personal Skill Development Titles' => [
                'name' => 'Personal Effectiveness & Life Skills',
                'series' => 'The Personal Skills Series',
                'slug' => 'spiritual-personal-skill-development',
                'color' => '#0369A1',
                'gradient' => 'linear-gradient(135deg, #0369A1 0%, #0284C7 100%)',
                'icon' => 'fa-seedling',
                'tagline' => 'Inner systems, productivity, and structure for long-term success.',
            ],
            '11. The Insight Series' => [
                'name' => 'Insight, Discernment & Wisdom',
                'series' => 'The Insight Series',
                'slug' => 'the-insight-series',
                'color' => '#4338CA',
                'gradient' => 'linear-gradient(135deg, #4338CA 0%, #4F46E5 100%)',
                'icon' => 'fa-lightbulb',
                'tagline' => 'See clearly, discern spiritual realities, and navigate complex seasons.',
            ],
            '12. Marriage Enrichment Titles' => [
                'name' => 'Marriage & Family Life',
                'series' => 'The Marriage Series',
                'slug' => 'marriage-enrichment',
                'color' => '#9D174D',
                'gradient' => 'linear-gradient(135deg, #9D174D 0%, #BE185D 100%)',
                'icon' => 'fa-ring',
                'tagline' => 'Deepen marital intimacy, weather storms, and build love that lasts.',
            ],
        ];

        // Gather all bundle books for the dedicated Bundle Showcase section
        $allBundleBooks = collect();
        foreach ($books as $cat => $catBooks) {
            $bundle = $catBooks->first(fn($b) => Str::contains(strtolower($b->title), ['bundle', 'pack', 'collection']));
            if ($bundle) {
                $allBundleBooks->push(['book' => $bundle, 'category' => $cat]);
            }
        }
    @endphp

    <style>
        :root {
            --bi-purple: #3F207F;
            --bi-purple-dark: #1E0A44;
            --bi-purple-light: #5A35A8;
            --bi-gold: #E4B548;
            --bi-gold-dark: #C9972A;
            --bi-card-bg: #FFFFFF;
            --bi-body-bg: #F8F9FD;
        }

        html {
            scroll-behavior: smooth;
        }

        [id] {
            scroll-margin-top: 130px;
        }

        /* Hero Styling */
        .books-hero-section {
            background: radial-gradient(circle at top right, rgba(228, 181, 72, 0.18), transparent 45%),
                        linear-gradient(135deg, #15072F 0%, #2D1460 55%, #180938 100%);
            position: relative;
            overflow: hidden;
        }

        .books-hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -20%;
            width: 70%;
            height: 200%;
            background: radial-gradient(circle, rgba(63, 32, 127, 0.3) 0%, transparent 60%);
            pointer-events: none;
        }

        .hero-badge-pill {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ffffff;
            font-size: 0.85rem;
            padding: 6px 16px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        /* Sticky Navigation Bar */
        .category-nav-wrapper {
            position: sticky;
            top: 72px;
            z-index: 99;
            background: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid #E6E1F4;
            box-shadow: 0 4px 20px rgba(63, 32, 127, 0.06);
            transition: all 0.3s ease;
        }

        .category-pill-scroll {
            display: flex;
            gap: 8px;
            overflow-x: auto;
            white-space: nowrap;
            padding: 12px 4px;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .category-pill-scroll::-webkit-scrollbar {
            display: none;
        }

        .category-pill-btn {
            background: #FFFFFF;
            color: #4A4A68;
            border: 1px solid #DCD7ED;
            border-radius: 30px;
            padding: 7px 18px;
            font-size: 0.88rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.25s ease;
            cursor: pointer;
        }

        .category-pill-btn:hover {
            background: #F1EDFC;
            color: var(--bi-purple);
            border-color: var(--bi-purple);
            transform: translateY(-1px);
        }

        .category-pill-btn.active {
            background: var(--bi-purple);
            color: #FFFFFF !important;
            border-color: var(--bi-purple);
            box-shadow: 0 4px 12px rgba(63, 32, 127, 0.25);
        }

        .category-pill-btn.special-bundle-pill {
            background: linear-gradient(135deg, #FFF3D6 0%, #FFE8B0 100%);
            border-color: #E4B548;
            color: #7A5305;
            font-weight: 700;
        }

        .category-pill-btn.special-bundle-pill:hover,
        .category-pill-btn.special-bundle-pill.active {
            background: linear-gradient(135deg, #E4B548 0%, #D49D24 100%);
            color: #000000 !important;
            border-color: #D49D24;
        }

        /* Search Box */
        .book-search-input {
            border-radius: 50px;
            padding: 12px 20px 12px 46px;
            border: 2px solid #E2D9F3;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .book-search-input:focus {
            border-color: var(--bi-purple);
            box-shadow: 0 0 0 4px rgba(63, 32, 127, 0.12);
        }

        .search-icon-pos {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #7E6EA6;
            pointer-events: none;
        }

        /* Category Bundle Spotlight Card */
        .bundle-spotlight-card {
            background: linear-gradient(145deg, #FFFFFF 0%, #F9F7FD 100%);
            border: 2px solid #E5DCF8;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(63, 32, 127, 0.08);
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .bundle-spotlight-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 40px rgba(63, 32, 127, 0.15);
            border-color: #C6B3EC;
        }

        .bundle-ribbon-tag {
            background: linear-gradient(135deg, #E4B548 0%, #F7C948 100%);
            color: #1A1302;
            font-weight: 800;
            font-size: 0.75rem;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            padding: 6px 14px;
            border-radius: 30px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            box-shadow: 0 3px 10px rgba(228, 181, 72, 0.35);
        }

        .bundle-img-wrapper {
            position: relative;
            background: linear-gradient(180deg, #F3EFFC 0%, #E8E1F8 100%);
            border-radius: 16px;
            padding: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 280px;
        }

        .bundle-img-wrapper img {
            max-height: 250px;
            width: auto;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .bundle-spotlight-card:hover .bundle-img-wrapper img {
            transform: scale(1.04) rotate(-1deg);
        }

        /* Individual Book Card */
        .book-item-node {
            position: relative;
            transition: z-index 0.2s ease;
        }

        .book-item-node:hover,
        .book-item-node:focus-within,
        .book-item-node.dropdown-active {
            z-index: 1050;
        }

        .book-single-card {
            background: #FFFFFF;
            border: 1px solid #EAE6F4;
            border-radius: 16px;
            overflow: visible; /* Allows dropdown menu to expand freely outside card */
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
        }

        .book-single-card:hover,
        .book-single-card:focus-within,
        .book-single-card.dropdown-active {
            transform: translateY(-6px);
            box-shadow: 0 14px 30px rgba(63, 32, 127, 0.12);
            border-color: #D3C4F0;
            z-index: 1050;
        }

        .book-cover-frame {
            background: linear-gradient(180deg, #F9F7FC 0%, #EDE7F8 100%);
            padding: 20px 16px;
            text-align: center;
            position: relative;
            min-height: 230px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px 15px 0 0;
            overflow: hidden;
        }

        .book-cover-frame img {
            max-height: 190px;
            width: auto;
            object-fit: contain;
            border-radius: 6px;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .book-single-card:hover .book-cover-frame img {
            transform: scale(1.05);
        }

        .book-desc-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-size: 0.88rem;
            line-height: 1.5;
            color: #666;
        }

        /* Purchase Options Dropdown / Buttons */
        .btn-paystack {
            background-color: #3F207F;
            border-color: #3F207F;
            color: #FFFFFF !important;
        }

        .btn-paystack:hover {
            background-color: #2D1460;
            border-color: #2D1460;
        }

        .btn-gold {
            background-color: #E4B548;
            border-color: #E4B548;
            color: #1A1302 !important;
            font-weight: 700;
        }

        .btn-gold:hover {
            background-color: #D49D24;
            border-color: #D49D24;
        }

        /* Series Section Header */
        .series-section-header {
            border-radius: 16px;
            padding: 20px 24px;
            color: #FFFFFF;
            position: relative;
            overflow: hidden;
        }

        .series-section-header::after {
            content: '';
            position: absolute;
            right: -40px;
            bottom: -40px;
            width: 140px;
            height: 140px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
            pointer-events: none;
        }

        /* Fast Category Filter Cards in Hero */
        .hero-cat-chip {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 12px;
            padding: 10px 14px;
            color: #FFFFFF;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.2s ease;
        }

        .hero-cat-chip:hover {
            background: rgba(255, 255, 255, 0.2);
            color: #FFE699;
            transform: translateX(4px);
        }

        .hero-cat-chip img {
            width: 34px;
            height: 48px;
            object-fit: cover;
            border-radius: 4px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        /* Dropdown custom item */
        .buy-dropdown-wrapper {
            position: relative;
        }

        .buy-dropdown-menu {
            border-radius: 14px;
            border: 1px solid #E6DFF5;
            box-shadow: 0 16px 36px rgba(63, 32, 127, 0.22), 0 4px 12px rgba(0, 0, 0, 0.06);
            padding: 8px;
            min-width: 260px;
            max-width: calc(100vw - 32px);
            z-index: 1060 !important;
            background: #FFFFFF;
            margin-top: 6px;
            right: 0;
            left: auto;
        }

        /* Invisible bridge to prevent mouseleave gap between button and dropdown */
        .buy-dropdown-menu::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 0;
            right: 0;
            height: 10px;
            background: transparent;
        }

        /* Hover support on desktop */
        @media (min-width: 992px) {
            .buy-dropdown-wrapper:hover > .buy-dropdown-menu {
                display: block !important;
                visibility: visible !important;
                opacity: 1 !important;
            }

            .buy-dropdown-wrapper:hover > .buy-dropdown-btn {
                background-color: #2D1460 !important;
                border-color: #2D1460 !important;
                color: #FFE699 !important;
            }
        }

        /* Click or touch display */
        .buy-dropdown-menu.show {
            display: block !important;
            visibility: visible !important;
            opacity: 1 !important;
        }

        .buy-dropdown-menu .dropdown-item {
            border-radius: 8px;
            padding: 9px 12px;
            font-size: 0.88rem;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: all 0.15s ease;
            color: #333333;
        }

        .buy-dropdown-menu .dropdown-item:hover {
            background: #F4EFFC;
            color: #3F207F;
            transform: translateX(3px);
        }

        .buy-dropdown-menu .dropdown-item i {
            font-size: 1.15rem;
            width: 22px;
            text-align: center;
            flex-shrink: 0;
        }

        /* Value Pillars Section */
        .value-pillar-card {
            background: #FFFFFF;
            border-radius: 16px;
            padding: 28px;
            border: 1px solid #ECE7F6;
            box-shadow: 0 6px 20px rgba(63, 32, 127, 0.04);
            height: 100%;
            transition: transform 0.3s ease;
        }

        .value-pillar-card:hover {
            transform: translateY(-4px);
            border-color: #D3C4F0;
        }

        .value-pillar-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        /* Floating Fast Jump Button */
        .quick-scroll-top-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 999;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--bi-purple);
            color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 20px rgba(63, 32, 127, 0.35);
            cursor: pointer;
            border: none;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .quick-scroll-top-btn.visible {
            opacity: 1;
            pointer-events: auto;
        }
    </style>

    <!-- HERO SECTION START -->
    <div class="books-hero-section py-5 text-white">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <span class="hero-badge-pill">
                            <i class="fa fa-book-open text-warning"></i> 100+ Published Volumes
                        </span>
                        <span class="hero-badge-pill">
                            <i class="fa fa-tags text-warning"></i> 12 Curated Thematic Series
                        </span>
                        <span class="hero-badge-pill">
                            <i class="fa fa-gift text-warning"></i> Category Bundle Plans
                        </span>
                    </div>

                    <h1 class="display-4 fw-bold text-white mb-3" style="line-height: 1.15;">
                        Life Purpose &amp; Personal Development Library
                    </h1>
                    <p class="fs-5 text-white-50 mb-4" style="line-height: 1.6;">
                        Authored by <strong>Bimbo Ilori</strong>, these works distill transformative spiritual truths, practical life frameworks, and clear leadership blueprints to help you walk with unwavering clarity and intentionality.
                    </p>

                    <!-- Real-Time Search Bar -->
                    <div class="position-relative mb-4" style="max-width: 580px;">
                        <i class="fa fa-search search-icon-pos"></i>
                        <input type="text" id="booksLiveSearch" class="form-control book-search-input" placeholder="Search by book title, series name, or theme (e.g. Unmute, Faith, Parenting, Bundle)...">
                    </div>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#faith-development" class="btn btn-warning rounded-pill px-4 py-3 fw-bold text-dark shadow-sm">
                            <i class="fa fa-compass me-2"></i> Browse All Series
                        </a>
                        <a href="#bundle-showcase-section" class="btn btn-outline-light rounded-pill px-4 py-3 fw-semibold">
                            <i class="fa fa-gift me-2 text-warning"></i> View Category Bundles (10% Off)
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 text-center">
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset('assets/img/book-002.png') }}" alt="Books by Bimbo Ilori" class="img-fluid rounded-4" style="max-height: 440px; width: auto; filter: drop-shadow(0 20px 30px rgba(0,0,0,0.45));">
                        <div class="position-absolute bottom-0 start-50 translate-middle-x bg-white text-dark px-4 py-2 rounded-pill shadow-lg text-nowrap" style="margin-bottom: -15px;">
                            <span class="fw-bold text-primary" style="color: #3F207F !important;">
                                <i class="fa fa-check-circle text-warning me-1"></i> Available in Digital &amp; Paperback
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION END -->

    <!-- STICKY QUICK CATEGORY SUB-NAV BAR START -->
    <div class="category-nav-wrapper">
        <div class="container">
            <div class="category-pill-scroll py-2">
                <button type="button" class="category-pill-btn active" data-filter="all">
                    <i class="fa fa-th-large"></i> All Series (64 Titles)
                </button>
                <button type="button" class="category-pill-btn special-bundle-pill" data-filter="bundles">
                    <i class="fa fa-gift"></i> 🎁 Category Bundles (12 Packs)
                </button>
                @foreach ($books as $category => $categoryBooks)
                    @php
                        $meta = $seriesMeta[$category] ?? null;
                        $slug = $meta['slug'] ?? Str::slug($category);
                        $shortName = $meta['name'] ?? preg_replace('/^\d+\.\s*/', '', $category);
                    @endphp
                    <a href="#{{ $slug }}" class="category-pill-btn" data-slug="{{ $slug }}">
                        @if(!empty($meta['icon']))
                            <i class="fa {{ $meta['icon'] }}"></i>
                        @endif
                        {{ $shortName }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- STICKY QUICK CATEGORY SUB-NAV BAR END -->

    <!-- SEARCH RESULTS LIVE NOTIFICATION BANNER -->
    <div id="searchNoticeBanner" class="container mt-4" style="display: none;">
        <div class="alert alert-info d-flex align-items-center justify-content-between rounded-pill px-4 py-2 border shadow-sm">
            <div>
                <i class="fa fa-filter me-2 text-primary"></i> 
                <span id="searchNoticeText">Filtering books...</span>
            </div>
            <button type="button" id="clearSearchBtn" class="btn btn-sm btn-link text-decoration-none fw-bold text-primary p-0">
                <i class="fa fa-times-circle me-1"></i> Reset Filter
            </button>
        </div>
    </div>

    <!-- MAIN BOOKS CONTENT START -->
    <div class="container-xxl py-5">
        <div class="container">

            <!-- SPECIAL STANDALONE BUNDLE SHOWCASE SECTION -->
            <div id="bundle-showcase-section" class="mb-5 pb-4">
                <div class="p-4 p-md-5 rounded-4 mb-4 text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #190835 0%, #3F207F 70%, #200947 100%);">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-8">
                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                                <i class="fa fa-star me-1"></i> Complete Series Value Packs
                            </span>
                            <h2 class="display-6 fw-bold text-white mb-2">Category Bundle Plans (10% Off)</h2>
                            <p class="text-white-50 mb-0 fs-6">
                                Acquire the full curated collection for any series in one simple order. Each Category Bundle combines all titles in that thematic track at a special bundle discount. Available in instant Digital Editions and Paperback Deliveries.
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <div class="d-inline-flex align-items-center gap-2 bg-white bg-opacity-10 px-4 py-3 rounded-4 border border-white border-opacity-25">
                                <i class="fa fa-shield-alt text-warning fs-2"></i>
                                <div class="text-start">
                                    <div class="fw-bold text-dark fs-5">12 Thematic Bundles</div>
                                    <small class="text-dark">Discounted Collection Pricing</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FOREACH CATEGORY / SERIES -->
            @foreach ($books as $category => $categoryBooks)
                @php
                    $meta = $seriesMeta[$category] ?? [
                        'name' => preg_replace('/^\d+\.\s*/', '', $category),
                        'series' => 'Life Purpose Series',
                        'slug' => Str::slug($category),
                        'color' => '#3F207F',
                        'gradient' => 'linear-gradient(135deg, #3F207F 0%, #5E35B1 100%)',
                        'icon' => 'fa-bookmark',
                        'tagline' => 'Transformative wisdom for purposeful living.',
                    ];
                    $categoryId = $meta['slug'];

                    // Separate bundle pack from individual titles
                    $bundleBook = $categoryBooks->first(fn($b) => Str::contains(strtolower($b->title), ['bundle', 'pack', 'collection']));
                    $singleBooks = $categoryBooks->reject(fn($b) => Str::contains(strtolower($b->title), ['bundle', 'pack', 'collection']));
                @endphp

                <section id="{{ $categoryId }}" class="series-category-block mb-5 pt-3" data-category="{{ strtolower($category) }} {{ strtolower($meta['name']) }} {{ strtolower($meta['series']) }}">
                    
                    <!-- Series Header Banner -->
                    <div class="series-section-header mb-4 shadow-sm" style="background: {{ $meta['gradient'] }};">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <span class="badge bg-white text-dark px-3 py-1 rounded-pill fw-bold text-uppercase" style="font-size: 0.75rem;">
                                        {{ $meta['series'] }}
                                    </span>
                                    <span class="text-white-50 small">&bull; {{ $categoryBooks->count() }} Total Titles</span>
                                </div>
                                <h3 class="fw-bold mb-1 text-white">{{ $meta['name'] }}</h3>
                                <p class="text-white-50 mb-0 small">{{ $meta['tagline'] }}</p>
                            </div>

                            @if(!empty($categoryBooks->first()->paystack_link))
                                <div>
                                    <a href="{{ $categoryBooks->first()->paystack_link }}" target="_blank" class="btn btn-sm btn-light rounded-pill px-3 py-2 fw-semibold text-nowrap shadow-sm">
                                        <i class="fa fa-store me-1 text-primary"></i> Series Paystack Store &rarr;
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- 1. FEATURED CATEGORY BUNDLE SPOTLIGHT (If Bundle Exists) -->
                    @if($bundleBook)
                        <div class="bundle-spotlight-card mb-4 p-4 p-md-4 book-item-node" 
                             data-title="{{ strtolower($bundleBook->title) }}" 
                             data-desc="{{ strtolower($bundleBook->description) }}"
                             data-category="{{ strtolower($category) }}"
                             data-is-bundle="true">
                            <div class="row align-items-center g-4">
                                <!-- Left: Bundle 3D Cover Mockup -->
                                <div class="col-md-4 col-lg-3 text-center">
                                    <div class="bundle-img-wrapper">
                                        <img src="{{ $bundleBook->image_url }}" alt="{{ $bundleBook->title }}" class="img-fluid">
                                    </div>
                                </div>

                                <!-- Right: Bundle Information & Purchase CTAs -->
                                <div class="col-md-8 col-lg-9">
                                    <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                                        <span class="bundle-ribbon-tag">
                                            <i class="fa fa-gift"></i> {{ $meta['series'] }} Collection
                                        </span>
                                        <span class="badge bg-danger text-white rounded-pill px-3 py-1 fw-bold">
                                            Special 10% Bundle Savings
                                        </span>
                                    </div>

                                    <h4 class="fw-bold text-dark mb-2" style="color: #26114F !important;">
                                        {{ $bundleBook->title }}
                                    </h4>

                                    <p class="text-secondary mb-3 lh-base fs-6" style="white-space: pre-line;">
                                        {{ $bundleBook->description }}
                                    </p>

                                    <!-- Purchase Options Grid for Bundle -->
                                    <div class="d-flex flex-wrap align-items-center gap-2 pt-2">
                                        @if (!empty($bundleBook->bookpaystackdigital_link))
                                            <a href="{{ $bundleBook->bookpaystackdigital_link }}" target="_blank" class="btn btn-paystack rounded-pill px-4 py-2 fw-semibold">
                                                <i class="fa fa-download me-1"></i> Buy Digital Bundle (Paystack)
                                            </a>
                                        @endif

                                        @if (!empty($bundleBook->bookpaystack_link))
                                            <a href="{{ $bundleBook->bookpaystack_link }}" target="_blank" class="btn btn-gold rounded-pill px-4 py-2">
                                                <i class="fa fa-box me-1"></i> Buy Paperback Bundle (Paystack)
                                            </a>
                                        @endif

                                        @if (!empty($bundleBook->bookselar_link))
                                            <a href="{{ $bundleBook->bookselar_link }}" target="_blank" class="btn btn-success rounded-pill px-3 py-2 fw-semibold">
                                                <i class="fa fa-shopping-cart me-1"></i> Selar
                                            </a>
                                        @endif

                                        @if (!empty($bundleBook->bookamazon_link))
                                            <a href="{{ $bundleBook->bookamazon_link }}" target="_blank" class="btn btn-dark rounded-pill px-3 py-2 fw-semibold">
                                                <i class="fab fa-amazon me-1"></i> Amazon
                                            </a>
                                        @endif

                                        <a href="{{ route('books.show', $bundleBook->id) }}" class="btn btn-outline-secondary rounded-pill px-3 py-2 fw-semibold">
                                            <i class="fa fa-info-circle me-1"></i> Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- 2. INDIVIDUAL BOOKS GRID IN THIS CATEGORY -->
                    <div class="row g-4 single-books-grid">
                        @foreach ($singleBooks as $book)
                            <div class="col-sm-6 col-md-4 col-lg-3 book-item-node" 
                                 data-title="{{ strtolower($book->title) }}" 
                                 data-desc="{{ strtolower($book->description) }}"
                                 data-category="{{ strtolower($category) }}"
                                 data-is-bundle="false">
                                
                                <div class="book-single-card">
                                    <!-- Book Cover -->
                                    <div class="book-cover-frame">
                                        <a href="{{ route('books.show', $book->id) }}">
                                            <img src="{{ $book->image_url }}" alt="{{ $book->title }}" class="img-fluid">
                                        </a>
                                    </div>

                                    <!-- Book Body -->
                                    <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                                        <div>
                                            <span class="badge bg-light text-muted border px-2 py-1 rounded-pill mb-2 small" style="font-size: 0.72rem;">
                                                {{ $meta['series'] }}
                                            </span>
                                            <h6 class="fw-bold mb-2 text-dark" style="min-height: 40px; line-height: 1.3;">
                                                <a href="{{ route('books.show', $book->id) }}" class="text-dark text-decoration-none hover-primary">
                                                    {{ $book->title }}
                                                </a>
                                            </h6>
                                            <p class="book-desc-clamp mb-3">
                                                {{ Str::limit(strip_tags($book->description), 110, '...') }}
                                            </p>
                                        </div>

                                        <!-- Card Footer Actions -->
                                        <div class="pt-2 border-top">
                                            <div class="d-flex align-items-center justify-content-between gap-1">
                                                <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-outline-secondary rounded-pill px-2 py-1 flex-grow-1" style="font-size: 0.8rem;">
                                                    <i class="fa fa-info-circle me-1"></i> Details
                                                </a>

                                                <!-- Quick Purchase Dropdown Menu -->
                                                <div class="dropdown flex-grow-1 buy-dropdown-wrapper">
                                                    <button class="btn btn-sm btn-primary rounded-pill px-2 py-1 w-100 dropdown-toggle text-nowrap buy-dropdown-btn" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" style="background-color: #3F207F; border-color: #3F207F; font-size: 0.8rem;">
                                                        <i class="fa fa-shopping-bag me-1"></i> Buy
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end buy-dropdown-menu shadow">
                                                        <li class="dropdown-header text-uppercase fw-bold text-muted small pb-1">
                                                            Order {{ Str::limit($book->title, 20) }}
                                                        </li>
                                                        @if(!empty($book->bookpaystackdigital_link))
                                                            <li>
                                                                <a class="dropdown-item" href="{{ $book->bookpaystackdigital_link }}" target="_blank">
                                                                    <i class="fa fa-download text-primary"></i>
                                                                    <div>
                                                                        <strong>Paystack Digital</strong>
                                                                        <small class="d-block text-muted">Instant e-book download</small>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        @endif
                                                        @if(!empty($book->bookpaystack_link))
                                                            <li>
                                                                <a class="dropdown-item" href="{{ $book->bookpaystack_link }}" target="_blank">
                                                                    <i class="fa fa-book text-warning"></i>
                                                                    <div>
                                                                        <strong>Paystack Paperback</strong>
                                                                        <small class="d-block text-muted">Physical print copy</small>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        @endif
                                                        @if(!empty($book->bookamazon_link))
                                                            <li>
                                                                <a class="dropdown-item" href="{{ $book->bookamazon_link }}" target="_blank">
                                                                    <i class="fab fa-amazon text-dark"></i>
                                                                    <div>
                                                                        <strong>Amazon Store</strong>
                                                                        <small class="d-block text-muted">Kindle &amp; Paperback worldwide</small>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        @endif
                                                        @if(!empty($book->bookselar_link))
                                                            <li>
                                                                <a class="dropdown-item" href="{{ $book->bookselar_link }}" target="_blank">
                                                                    <i class="fa fa-shopping-cart text-success"></i>
                                                                    <div>
                                                                        <strong>Selar Store</strong>
                                                                        <small class="d-block text-muted">Digital edition checkout</small>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        @endif
                                                        @if(empty($book->bookpaystackdigital_link) && empty($book->bookpaystack_link) && empty($book->bookamazon_link) && empty($book->bookselar_link))
                                                            <li>
                                                                <a class="dropdown-item text-muted" href="{{ route('books.show', $book->id) }}">
                                                                    <i class="fa fa-envelope text-secondary"></i> Inquire to Order
                                                                </a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>

                </section>
            @endforeach

        </div>
    </div>
    <!-- MAIN BOOKS CONTENT END -->

    <!-- WHY READ LPPD BOOKS VALUE PILLARS SECTION -->
    <div class="container-fluid py-5" style="background-color: #F8F6FD; border-top: 1px solid #ECE7F6;">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                    Transformative Reading
                </span>
                <h2 class="fw-bold text-dark mb-2" style="color: #240E4A !important;">Why Readers Choose LPPD Books</h2>
                <p class="text-muted" style="max-width: 600px; margin: 0 auto;">
                    Life Purpose &amp; Personal Development (LPPD) titles by Bimbo Ilori are meticulously structured to deliver clarity, conviction, and sustainable change.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="value-pillar-card">
                        <div class="value-pillar-icon" style="background: rgba(63, 32, 127, 0.1); color: #3F207F;">
                            <i class="fa fa-bible"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Scriptural Foundations</h5>
                        <p class="text-secondary small mb-0 lh-base">
                            Rooted in timeless biblical truths that anchor your convictions, bring spiritual discernment, and preserve your peace.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="value-pillar-card">
                        <div class="value-pillar-icon" style="background: rgba(228, 181, 72, 0.18); color: #B45309;">
                            <i class="fa fa-lightbulb"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Practical Frameworks</h5>
                        <p class="text-secondary small mb-0 lh-base">
                            Distilled from real experiences into clear, actionable principles that can be immediately applied in daily life.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="value-pillar-card">
                        <div class="value-pillar-icon" style="background: rgba(15, 118, 110, 0.12); color: #0F766E;">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Holistic Growth</h5>
                        <p class="text-secondary small mb-0 lh-base">
                            Addressing mind, spirit, emotions, relationships, and enterprise for a well-rounded and deeply fulfilling journey.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="value-pillar-card">
                        <div class="value-pillar-icon" style="background: rgba(67, 56, 202, 0.12); color: #4338CA;">
                            <i class="fa fa-globe-africa"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Worldwide Availability</h5>
                        <p class="text-secondary small mb-0 lh-base">
                            Instant digital downloads and doorstep paperback delivery through trusted global channels like Paystack, Amazon, and Selar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- VALUE PILLARS END -->

    <!-- FLOATING SCROLL TO TOP BUTTON -->
    <button type="button" id="quickScrollTopBtn" class="quick-scroll-top-btn" title="Back to Top">
        <i class="fa fa-arrow-up"></i>
    </button>

    <!-- LIVE SEARCH & CATEGORY PILL FILTER SCRIPT -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('booksLiveSearch');
            const searchNoticeBanner = document.getElementById('searchNoticeBanner');
            const searchNoticeText = document.getElementById('searchNoticeText');
            const clearSearchBtn = document.getElementById('clearSearchBtn');
            const categoryPillBtns = document.querySelectorAll('.category-pill-btn');
            const bookCards = document.querySelectorAll('.book-item-node');
            const categorySections = document.querySelectorAll('.series-category-block');
            const scrollTopBtn = document.getElementById('quickScrollTopBtn');

            // Scroll to Top visibility
            window.addEventListener('scroll', function() {
                if (window.scrollY > 400) {
                    scrollTopBtn.classList.add('visible');
                } else {
                    scrollTopBtn.classList.remove('visible');
                }
            });

            scrollTopBtn.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            // Handle live search
            function runLiveSearch() {
                const query = searchInput.value.trim().toLowerCase();

                if (!query) {
                    searchNoticeBanner.style.display = 'none';
                    bookCards.forEach(card => card.style.display = '');
                    categorySections.forEach(sec => sec.style.display = '');
                    return;
                }

                let matchesCount = 0;

                categorySections.forEach(section => {
                    let sectionHasMatch = false;
                    const itemsInSection = section.querySelectorAll('.book-item-node');

                    itemsInSection.forEach(card => {
                        const title = card.getAttribute('data-title') || '';
                        const desc = card.getAttribute('data-desc') || '';
                        const cat = card.getAttribute('data-category') || '';

                        if (title.includes(query) || desc.includes(query) || cat.includes(query)) {
                            card.style.display = '';
                            sectionHasMatch = true;
                            matchesCount++;
                        } else {
                            card.style.display = 'none';
                        }
                    });

                    if (sectionHasMatch) {
                        section.style.display = '';
                    } else {
                        section.style.display = 'none';
                    }
                });

                searchNoticeBanner.style.display = 'block';
                searchNoticeText.innerHTML = `Found <strong>${matchesCount}</strong> matching title(s) for "<strong>${escapeHtml(query)}</strong>"`;
            }

            searchInput.addEventListener('input', runLiveSearch);

            clearSearchBtn.addEventListener('click', function() {
                searchInput.value = '';
                runLiveSearch();
                searchInput.focus();
            });

            // Handle filter pills (All vs Bundles vs Specific Category)
            categoryPillBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const filter = this.getAttribute('data-filter');
                    const targetSlug = this.getAttribute('data-slug');

                    categoryPillBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    if (filter === 'bundles') {
                        e.preventDefault();
                        searchInput.value = '';
                        searchNoticeBanner.style.display = 'block';
                        searchNoticeText.innerHTML = `Showing all <strong>12 Category Bundle Plans</strong> (Full Collection Series)`;

                        categorySections.forEach(section => {
                            const bundleCard = section.querySelector('[data-is-bundle="true"]');
                            const singleCards = section.querySelectorAll('[data-is-bundle="false"]');
                            singleCards.forEach(c => c.style.display = 'none');

                            if (bundleCard) {
                                bundleCard.style.display = '';
                                section.style.display = '';
                            } else {
                                section.style.display = 'none';
                            }
                        });

                        const bundleSection = document.getElementById('bundle-showcase-section');
                        if (bundleSection) {
                            bundleSection.scrollIntoView({ behavior: 'smooth' });
                        }
                    } else if (filter === 'all') {
                        e.preventDefault();
                        searchInput.value = '';
                        searchNoticeBanner.style.display = 'none';
                        bookCards.forEach(c => c.style.display = '');
                        categorySections.forEach(s => s.style.display = '');
                        window.scrollTo({ top: 380, behavior: 'smooth' });
                    } else if (targetSlug) {
                        // Regular category anchor jump
                        // Reset search/bundles view
                        searchInput.value = '';
                        searchNoticeBanner.style.display = 'none';
                        bookCards.forEach(c => c.style.display = '');
                        categorySections.forEach(s => s.style.display = '');
                    }
                });
            });

            function escapeHtml(text) {
                const map = { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' };
                return text.replace(/[&<>"']/g, function(m) { return map[m]; });
            }

            // Buy Dropdown Hover & Click Sync for individual book cards
            const buyDropdownWrappers = document.querySelectorAll('.buy-dropdown-wrapper');
            buyDropdownWrappers.forEach(wrapper => {
                const card = wrapper.closest('.book-single-card');
                const node = wrapper.closest('.book-item-node');
                const menu = wrapper.querySelector('.buy-dropdown-menu');

                // On mouse enter: elevate card z-index so dropdown floats above cards below
                wrapper.addEventListener('mouseenter', function() {
                    if (card) card.classList.add('dropdown-active');
                    if (node) node.classList.add('dropdown-active');
                });

                // On mouse leave: only remove elevation if menu is not actively open
                wrapper.addEventListener('mouseleave', function() {
                    if (!menu || !menu.classList.contains('show')) {
                        if (card) card.classList.remove('dropdown-active');
                        if (node) node.classList.remove('dropdown-active');
                    }
                });

                // Listen to Bootstrap dropdown events
                wrapper.addEventListener('show.bs.dropdown', function() {
                    if (card) card.classList.add('dropdown-active');
                    if (node) node.classList.add('dropdown-active');
                });

                wrapper.addEventListener('hidden.bs.dropdown', function() {
                    if (card) card.classList.remove('dropdown-active');
                    if (node) node.classList.remove('dropdown-active');
                });
            });
        });
    </script>
</x-guest-layout>