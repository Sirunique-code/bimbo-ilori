<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav pt-3">
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="ti-dashboard menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <!-- Purpose Insights Management (Featured) -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('superadmin.purpose-insights.index') }}">
        <i class="ti-light-bulb menu-icon"></i>
        <span class="menu-title">Purpose Insights</span>
      </a>
    </li>

    <!-- Books Management -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('superadmin.books.book-manager') }}">
        <i class="ti-book menu-icon"></i>
        <span class="menu-title">Manage Books</span>
      </a>
    </li>

    <!-- Courses Management -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('superadmin.courses.index') }}">
        <i class="ti-panel menu-icon"></i>
        <span class="menu-title">Manage Courses</span>
      </a>
    </li>

    <!-- Newsletter Subscribers -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('superadmin.newsletter.index') }}">
        <i class="ti-email menu-icon"></i>
        <span class="menu-title">Subscribers List</span>
      </a>
    </li>

    <!-- Testimonials Management -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('superadmin.testimonials.index') }}">
        <i class="ti-comment-alt menu-icon"></i>
        <span class="menu-title">Testimonials</span>
      </a>
    </li>

    <!-- Quotes Gallery -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('superadmin.quotes.index') }}">
        <i class="ti-image menu-icon"></i>
        <span class="menu-title">Quotes Gallery</span>
      </a>
    </li>

    <!-- Quick External Link -->
    <li class="nav-item mt-4 px-3">
      <a class="btn btn-warning w-100 text-dark font-weight-bold d-flex align-items-center justify-content-center py-2 rounded-pill shadow-sm" href="{{ route('welcome') }}" target="_blank">
        <i class="fa fa-globe me-2"></i> Visit Live Website
      </a>
    </li>

  </ul>
</nav>
