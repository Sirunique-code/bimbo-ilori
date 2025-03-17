<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
      <a class="sidebar-brand brand-logo" href="{{ route('dashboard') }}">
        <img src="{{ asset('assets/img/bi-logo-full.png') }}" alt="logo" />
      </a>
      <a class="sidebar-brand brand-logo-mini ps-4 pt-3" href="{{ route('dashboard') }}">
        <img src="{{ asset('assets/img/bi-logo-mini.png') }}" alt="logo" />
      </a>
    </div>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-book menu-icon"></i>
          <span class="menu-title">Manage Courses</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-library menu-icon"></i>
          <span class="menu-title">Manage Books</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-comment menu-icon"></i>
          <span class="menu-title">Manage Testimonials</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-logout menu-icon"></i>
          <span class="menu-title">Logout</span>
        </a>
      </li>
    </ul>
  </nav>
  