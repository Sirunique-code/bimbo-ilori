<div>
    <!-- Welcome Hero Banner -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="p-4 p-md-5 rounded-4 text-white position-relative overflow-hidden shadow-sm" 
                 style="background: linear-gradient(135deg, #2A1254 0%, #3F207F 50%, #1A0D36 100%); border: 1px solid rgba(228, 181, 72, 0.2);">
                <!-- Subtle Background Decorative Glow -->
                <div class="position-absolute end-0 top-0 w-50 h-100 opacity-25 d-none d-md-block" 
                     style="background: radial-gradient(circle at 80% 20%, rgba(228, 181, 72, 0.4) 0%, transparent 60%); pointer-events: none;"></div>

                <div class="row align-items-center position-relative">
                    <div class="col-lg-8">
                        <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(228, 181, 72, 0.15); border: 1px solid rgba(228, 181, 72, 0.35);">
                            <i class="bi bi-stars text-warning"></i>
                            <span class="text-warning fw-bold small text-uppercase" style="letter-spacing: 0.05em;">Bimbo Ilori Programs &bull; Control Center</span>
                        </div>
                        <h1 class="display-6 fw-extrabold text-white mb-2" style="letter-spacing: -0.02em;">Welcome Back, Super Admin!</h1>
                        <p class="text-white-50 fs-6 mb-4 col-md-11" style="line-height: 1.6;">
                            Manage books, coaching courses, purpose insights, newsletter broadcasts, and website content seamlessly from one unified modern dashboard.
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="{{ route('superadmin.purpose-insights.index') }}" class="btn btn-warning rounded-pill px-4">
                                <i class="bi bi-lightbulb-fill me-1"></i> New Purpose Insight
                            </a>
                            <a href="{{ route('superadmin.books.book-manager') }}" class="btn btn-outline-light rounded-pill px-4">
                                <i class="bi bi-book me-1"></i> Manage Books
                            </a>
                            <a href="{{ route('superadmin.courses.index') }}" class="btn btn-outline-light rounded-pill px-4">
                                <i class="bi bi-mortarboard me-1"></i> Manage Courses
                            </a>
                            <a href="{{ route('welcome') }}" target="_blank" class="btn btn-outline-light rounded-pill px-3" title="View Public Website">
                                <i class="bi bi-box-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-flex justify-content-end">
                        <div class="p-3 rounded-4 text-center border" style="background: rgba(255, 255, 255, 0.05); border-color: rgba(255, 255, 255, 0.1) !important; min-width: 220px;">
                            <div class="avatar-badge mx-auto mb-2" style="width: 56px; height: 56px; font-size: 1.25rem;">
                                BI
                            </div>
                            <h6 class="text-white fw-bold mb-1">Bimbo Ilori</h6>
                            <span class="badge bg-warning text-dark px-2 py-1 rounded-pill font-monospace small">SUPERADMIN</span>
                            <div class="mt-3 pt-2 border-top border-white-50 text-white-50 small d-flex justify-content-between">
                                <span>Status</span>
                                <span class="text-success fw-bold"><i class="bi bi-dot"></i> Live Active</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- KPI Statistics Grid -->
    <div class="row g-3 mb-4">
        <!-- 1. Purpose Insights -->
        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-stat-card h-100">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="kpi-label">Insights</span>
                    <div class="kpi-icon-container" style="background: rgba(228, 181, 72, 0.12); color: #C99726;">
                        <i class="bi bi-lightbulb-fill"></i>
                    </div>
                </div>
                <div class="kpi-value text-dark">{{ $totalInsights }}</div>
                <span class="small text-muted d-block mt-1">Articles published</span>
            </div>
        </div>

        <!-- 2. Total Books -->
        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-stat-card h-100">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="kpi-label">Books</span>
                    <div class="kpi-icon-container" style="background: rgba(63, 32, 127, 0.1); color: #3F207F;">
                        <i class="bi bi-book-half"></i>
                    </div>
                </div>
                <div class="kpi-value text-dark">{{ $totalBooks }}</div>
                <span class="small text-muted d-block mt-1">LPPD & STC titles</span>
            </div>
        </div>

        <!-- 3. Total Courses -->
        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-stat-card h-100">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="kpi-label">Programs</span>
                    <div class="kpi-icon-container" style="background: rgba(16, 185, 129, 0.1); color: #10B981;">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                </div>
                <div class="kpi-value text-dark">{{ $totalCourses }}</div>
                <span class="small text-muted d-block mt-1">Active courses</span>
            </div>
        </div>

        <!-- 4. Total Subscribers -->
        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-stat-card h-100">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="kpi-label">Subscribers</span>
                    <div class="kpi-icon-container" style="background: rgba(14, 165, 233, 0.1); color: #0EA5E9;">
                        <i class="bi bi-envelope-paper-fill"></i>
                    </div>
                </div>
                <div class="kpi-value text-dark">{{ $totalSubscribers }}</div>
                <span class="small text-muted d-block mt-1">Email audience</span>
            </div>
        </div>

        <!-- 5. Total Testimonials -->
        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-stat-card h-100">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="kpi-label">Stories</span>
                    <div class="kpi-icon-container" style="background: rgba(139, 92, 246, 0.1); color: #8B5CF6;">
                        <i class="bi bi-chat-quote-fill"></i>
                    </div>
                </div>
                <div class="kpi-value text-dark">{{ $totalTestimonials }}</div>
                <span class="small text-muted d-block mt-1">Testimonial cards</span>
            </div>
        </div>

        <!-- 6. Total Quotes -->
        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-stat-card h-100">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="kpi-label">Quotes</span>
                    <div class="kpi-icon-container" style="background: rgba(236, 72, 153, 0.1); color: #EC4899;">
                        <i class="bi bi-images"></i>
                    </div>
                </div>
                <div class="kpi-value text-dark">{{ $totalQuotes }}</div>
                <span class="small text-muted d-block mt-1">Inspirational gallery</span>
            </div>
        </div>
    </div>

    <!-- Quick Navigation Launchpad -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card h-100 card-hover">
                <div class="card-body p-4 d-flex flex-column text-center">
                    <div class="mx-auto p-3 rounded-circle mb-3 d-inline-flex align-items-center justify-content-center" 
                         style="width: 64px; height: 64px; background: rgba(228, 181, 72, 0.15); color: #C99726; font-size: 1.75rem;">
                        <i class="bi bi-lightbulb-fill"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Purpose Insights & Articles</h5>
                    <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">
                        Write opening tips, manage inspirational articles, and broadcast notifications directly to subscribers.
                    </p>
                    <a href="{{ route('superadmin.purpose-insights.index') }}" class="btn btn-primary rounded-pill w-100">
                        <i class="bi bi-arrow-right-circle me-1"></i> Open Insights Manager
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 card-hover">
                <div class="card-body p-4 d-flex flex-column text-center">
                    <div class="mx-auto p-3 rounded-circle mb-3 d-inline-flex align-items-center justify-content-center" 
                         style="width: 64px; height: 64px; background: rgba(63, 32, 127, 0.12); color: #3F207F; font-size: 1.75rem;">
                        <i class="bi bi-book-half"></i>
                    </div>
                    <h5 class="fw-bold mb-2">LPPD & STC Books</h5>
                    <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">
                        Manage books collection, Amazon, Selar, Paystack buy links, descriptions, and cover artwork.
                    </p>
                    <a href="{{ route('superadmin.books.book-manager') }}" class="btn btn-primary rounded-pill w-100">
                        <i class="bi bi-arrow-right-circle me-1"></i> Open Books Manager
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 card-hover">
                <div class="card-body p-4 d-flex flex-column text-center">
                    <div class="mx-auto p-3 rounded-circle mb-3 d-inline-flex align-items-center justify-content-center" 
                         style="width: 64px; height: 64px; background: rgba(16, 185, 129, 0.12); color: #10B981; font-size: 1.75rem;">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Coaching Programs</h5>
                    <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">
                        Manage life purpose programs, USD and NGN price points, registration forms, and media.
                    </p>
                    <a href="{{ route('superadmin.courses.index') }}" class="btn btn-primary rounded-pill w-100">
                        <i class="bi bi-arrow-right-circle me-1"></i> Open Programs Manager
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Shortcuts & Audience Management -->
    <div class="row g-4">
        <!-- Left: Quick Action Tiles -->
        <div class="col-lg-7">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h6 class="mb-0 fw-bold"><i class="bi bi-lightning-charge-fill text-warning me-2"></i> Quick Actions</h6>
                    <span class="badge bg-light text-muted border">Shortcut Center</span>
                </div>
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <a href="{{ route('superadmin.courses.create') }}" class="d-flex align-items-center p-3 rounded-3 border text-decoration-none card-hover bg-light text-dark">
                                <div class="p-2 rounded-2 bg-success text-white me-3">
                                    <i class="bi bi-plus-lg fs-5"></i>
                                </div>
                                <div>
                                    <span class="fw-bold d-block">Create New Program</span>
                                    <small class="text-muted">Add course details & pricing</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('superadmin.quotes.index') }}" class="d-flex align-items-center p-3 rounded-3 border text-decoration-none card-hover bg-light text-dark">
                                <div class="p-2 rounded-2 bg-danger text-white me-3">
                                    <i class="bi bi-upload fs-5"></i>
                                </div>
                                <div>
                                    <span class="fw-bold d-block">Upload Quote Image</span>
                                    <small class="text-muted">Inspirational graphics gallery</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('superadmin.testimonials.index') }}" class="d-flex align-items-center p-3 rounded-3 border text-decoration-none card-hover bg-light text-dark">
                                <div class="p-2 rounded-2 text-white me-3" style="background: #8B5CF6;">
                                    <i class="bi bi-chat-heart-fill fs-5"></i>
                                </div>
                                <div>
                                    <span class="fw-bold d-block">Add Testimonial</span>
                                    <small class="text-muted">Upload client review cards</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('superadmin.newsletter.index') }}" class="d-flex align-items-center p-3 rounded-3 border text-decoration-none card-hover bg-light text-dark">
                                <div class="p-2 rounded-2 bg-info text-white me-3">
                                    <i class="bi bi-people-fill fs-5"></i>
                                </div>
                                <div>
                                    <span class="fw-bold d-block">Subscriber Audience</span>
                                    <small class="text-muted">View all newsletter emails</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: Public Website Quick Links -->
        <div class="col-lg-5">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h6 class="mb-0 fw-bold"><i class="bi bi-globe2 text-primary me-2"></i> Live Website Quick Jump</h6>
                    <a href="{{ route('welcome') }}" target="_blank" class="text-decoration-none small fw-bold">Visit Site &rarr;</a>
                </div>
                <div class="card-body p-4">
                    <div class="list-group list-group-flush">
                        <a href="{{ route('welcome') }}" target="_blank" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center px-0 py-2 border-bottom">
                            <span class="d-flex align-items-center gap-2"><i class="bi bi-house-door text-primary"></i> Homepage</span>
                            <i class="bi bi-box-arrow-up-right text-muted small"></i>
                        </a>
                        <a href="{{ route('books.index') }}" target="_blank" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center px-0 py-2 border-bottom">
                            <span class="d-flex align-items-center gap-2"><i class="bi bi-book text-warning"></i> Books Catalog</span>
                            <i class="bi bi-box-arrow-up-right text-muted small"></i>
                        </a>
                        <a href="{{ route('courses') }}" target="_blank" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center px-0 py-2 border-bottom">
                            <span class="d-flex align-items-center gap-2"><i class="bi bi-mortarboard text-success"></i> Programs & Coaching</span>
                            <i class="bi bi-box-arrow-up-right text-muted small"></i>
                        </a>
                        <a href="{{ route('purpose-insight') }}" target="_blank" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center px-0 py-2">
                            <span class="d-flex align-items-center gap-2"><i class="bi bi-lightbulb text-info"></i> Purpose Insights</span>
                            <i class="bi bi-box-arrow-up-right text-muted small"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>