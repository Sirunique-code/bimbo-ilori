<div>
    <!-- Welcome Hero Banner -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="p-4 p-md-5 rounded-4 shadow-sm text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #3F207F 0%, #1a1033 100%);">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold mb-3">Bimbo Ilori Programs Control Center</span>
                        <h1 class="display-5 font-weight-bold text-white mb-2">Welcome Back, Super Admin!</h1>
                        <p class="text-white-50 fs-6 mb-4">
                            Manage your books, coaching courses, purpose insights, subscriber email broadcasts, and website content seamlessly from one place.
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="{{ route('superadmin.purpose-insights.index') }}" class="btn btn-warning font-weight-bold px-4 rounded-pill">
                                <i class="ti-light-bulb me-1"></i> New Purpose Insight
                            </a>
                            <a href="{{ route('superadmin.books.book-manager') }}" class="btn btn-outline-light font-weight-bold px-4 rounded-pill">
                                <i class="ti-book me-1"></i> Manage Books
                            </a>
                            <a href="{{ route('superadmin.courses.index') }}" class="btn btn-outline-light font-weight-bold px-4 rounded-pill">
                                <i class="ti-panel me-1"></i> Manage Courses
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- KPI Statistics Grid -->
    <div class="row g-3 mb-5">
        <!-- 1. Purpose Insights -->
        <div class="col-md-4 col-lg-2">
            <div class="card card-hover h-100 border-0 shadow-sm p-3" style="border-left: 4px solid #E4B548 !important;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small font-weight-bold d-block mb-1">Insights</span>
                        <h2 class="font-weight-bold mb-0 text-dark">{{ $totalInsights }}</h2>
                    </div>
                    <div class="rounded-circle p-3 text-warning bg-light">
                        <i class="ti-light-bulb fs-4"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Total Books -->
        <div class="col-md-4 col-lg-2">
            <div class="card card-hover h-100 border-0 shadow-sm p-3" style="border-left: 4px solid #3F207F !important;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small font-weight-bold d-block mb-1">Books</span>
                        <h2 class="font-weight-bold mb-0 text-dark">{{ $totalBooks }}</h2>
                    </div>
                    <div class="rounded-circle p-3 text-primary bg-light">
                        <i class="ti-book fs-4"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Total Courses -->
        <div class="col-md-4 col-lg-2">
            <div class="card card-hover h-100 border-0 shadow-sm p-3" style="border-left: 4px solid #10B981 !important;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small font-weight-bold d-block mb-1">Courses</span>
                        <h2 class="font-weight-bold mb-0 text-dark">{{ $totalCourses }}</h2>
                    </div>
                    <div class="rounded-circle p-3 text-success bg-light">
                        <i class="ti-panel fs-4"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Total Subscribers -->
        <div class="col-md-4 col-lg-2">
            <div class="card card-hover h-100 border-0 shadow-sm p-3" style="border-left: 4px solid #3B82F6 !important;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small font-weight-bold d-block mb-1">Subscribers</span>
                        <h2 class="font-weight-bold mb-0 text-dark">{{ $totalSubscribers }}</h2>
                    </div>
                    <div class="rounded-circle p-3 text-info bg-light">
                        <i class="ti-email fs-4"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. Total Testimonials -->
        <div class="col-md-4 col-lg-2">
            <div class="card card-hover h-100 border-0 shadow-sm p-3" style="border-left: 4px solid #8B5CF6 !important;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small font-weight-bold d-block mb-1">Testimonials</span>
                        <h2 class="font-weight-bold mb-0 text-dark">{{ $totalTestimonials }}</h2>
                    </div>
                    <div class="rounded-circle p-3 text-purple bg-light">
                        <i class="ti-comment-alt fs-4"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. Total Quotes -->
        <div class="col-md-4 col-lg-2">
            <div class="card card-hover h-100 border-0 shadow-sm p-3" style="border-left: 4px solid #EC4899 !important;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small font-weight-bold d-block mb-1">Quotes</span>
                        <h2 class="font-weight-bold mb-0 text-dark">{{ $totalQuotes }}</h2>
                    </div>
                    <div class="rounded-circle p-3 text-danger bg-light">
                        <i class="ti-image fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Navigation Launchpad -->
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm card-hover">
                <div class="card-body p-4 text-center">
                    <div class="p-3 bg-light rounded-circle d-inline-block mb-3 text-warning">
                        <i class="ti-light-bulb fs-2"></i>
                    </div>
                    <h5 class="font-weight-bold mb-2">Purpose Insights & Articles</h5>
                    <p class="text-muted small mb-4">Create articles, opening tips, and automatically broadcast updates to subscribers.</p>
                    <a href="{{ route('superadmin.purpose-insights.index') }}" class="btn btn-primary w-100 rounded-pill">Manage Insights</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm card-hover">
                <div class="card-body p-4 text-center">
                    <div class="p-3 bg-light rounded-circle d-inline-block mb-3 text-primary">
                        <i class="ti-book fs-2"></i>
                    </div>
                    <h5 class="font-weight-bold mb-2">LPPD & STC Books</h5>
                    <p class="text-muted small mb-4">Manage 100+ published books, Amazon/Selar/Paystack purchase links, and cover images.</p>
                    <a href="{{ route('superadmin.books.book-manager') }}" class="btn btn-primary w-100 rounded-pill">Manage Books</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm card-hover">
                <div class="card-body p-4 text-center">
                    <div class="p-3 bg-light rounded-circle d-inline-block mb-3 text-success">
                        <i class="ti-panel fs-2"></i>
                    </div>
                    <h5 class="font-weight-bold mb-2">Coaching Courses</h5>
                    <p class="text-muted small mb-4">Manage life purpose coaching programs, pricing in USD/NGN, and registration links.</p>
                    <a href="{{ route('superadmin.courses.index') }}" class="btn btn-primary w-100 rounded-pill">Manage Courses</a>
                </div>
            </div>
        </div>
    </div>
</div>