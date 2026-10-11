<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav pt-2">
    
    <!-- SECTION 1: OVERVIEW -->
    <li class="sidebar-section-title">Overview</li>

    <li class="nav-item {{ request()->routeIs('dashboard*') ? 'active' : '' }}">
      <a class="nav-link {{ request()->routeIs('dashboard*') ? 'active' : '' }}" href="{{ route('dashboard') }}">
        <i class="bi bi-grid-1x2-fill menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <!-- SECTION 2: CONTENT & PROGRAMS -->
    <li class="sidebar-section-title mt-2">Publishing & Programs</li>

    <!-- Purpose Insights -->
    <li class="nav-item {{ request()->routeIs('superadmin.purpose-insights*') ? 'active' : '' }}">
      <a class="nav-link {{ request()->routeIs('superadmin.purpose-insights*') ? 'active' : '' }}" href="{{ route('superadmin.purpose-insights.index') }}">
        <i class="bi bi-lightbulb-fill menu-icon"></i>
        <span class="menu-title">Purpose Insights</span>
        <span class="sidebar-badge">Hot</span>
      </a>
    </li>

    <!-- Books Management -->
    <li class="nav-item {{ request()->routeIs('superadmin.books*') ? 'active' : '' }}">
      <a class="nav-link {{ request()->routeIs('superadmin.books*') ? 'active' : '' }}" href="{{ route('superadmin.books.book-manager') }}">
        <i class="bi bi-book-half menu-icon"></i>
        <span class="menu-title">Manage Books</span>
      </a>
    </li>

    <!-- Courses Management -->
    <li class="nav-item {{ request()->routeIs('superadmin.courses*') ? 'active' : '' }}">
      <a class="nav-link {{ request()->routeIs('superadmin.courses*') ? 'active' : '' }}" href="{{ route('superadmin.courses.index') }}">
        <i class="bi bi-mortarboard-fill menu-icon"></i>
        <span class="menu-title">Courses & Programs</span>
      </a>
    </li>

    <!-- SECTION 3: AUDIENCE & MEDIA -->
    <li class="sidebar-section-title mt-2">Community & Media</li>

    <!-- Newsletter Subscribers -->
    <li class="nav-item {{ request()->routeIs('superadmin.newsletter*') ? 'active' : '' }}">
      <a class="nav-link {{ request()->routeIs('superadmin.newsletter*') ? 'active' : '' }}" href="{{ route('superadmin.newsletter.index') }}">
        <i class="bi bi-envelope-paper-fill menu-icon"></i>
        <span class="menu-title">Subscribers List</span>
      </a>
    </li>

    <!-- Testimonials Management -->
    <li class="nav-item {{ request()->routeIs('superadmin.testimonials*') ? 'active' : '' }}">
      <a class="nav-link {{ request()->routeIs('superadmin.testimonials*') ? 'active' : '' }}" href="{{ route('superadmin.testimonials.index') }}">
        <i class="bi bi-chat-quote-fill menu-icon"></i>
        <span class="menu-title">Testimonials</span>
      </a>
    </li>

    <!-- Quotes Gallery -->
    <li class="nav-item {{ request()->routeIs('superadmin.quotes*') ? 'active' : '' }}">
      <a class="nav-link {{ request()->routeIs('superadmin.quotes*') ? 'active' : '' }}" href="{{ route('superadmin.quotes.index') }}">
        <i class="bi bi-images menu-icon"></i>
        <span class="menu-title">Quotes Gallery</span>
      </a>
    </li>

    <!-- SECTION 4: QUICK EXTERNAL ACTION -->
    <li class="nav-item mt-3 px-2">
      <div class="sidebar-cta-card">
        <div class="d-flex align-items-center justify-content-center mb-2">
          <span class="badge bg-warning text-dark px-2 py-1 rounded-pill fw-bold" style="font-size: 0.65rem;">LIVE SITE</span>
        </div>
        <p class="mb-2">View changes live on the public front website.</p>
        <a class="btn btn-warning w-100 text-dark fw-bold btn-sm rounded-pill" href="{{ route('welcome') }}" target="_blank">
          <i class="bi bi-arrow-up-right-square me-1"></i> Open Website
        </a>
      </div>
    </li>

  </ul>
</nav>
