<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <!-- Brand Logo Container -->
  <div class="navbar-brand-wrapper d-flex align-items-center justify-content-center justify-content-lg-start px-2 px-lg-3">
    <!-- Desktop Full Brand Logo -->
    <a class="navbar-brand brand-logo d-none d-lg-flex align-items-center gap-2 text-decoration-none" href="{{ route('dashboard') }}">
      <img src="{{ asset('assets/img/bi-logo-mini-full2.png') }}" alt="logo" style="height: 34px;"/>
      <div class="d-flex flex-column text-start">
        <span class="text-white fw-bold fs-6 lh-1" style="letter-spacing: -0.02em;">Bimbo Ilori</span>
        <span class="text-warning text-uppercase" style="font-size: 0.65rem; font-weight: 700; letter-spacing: 0.08em;">Control Center</span>
      </div>
    </a>
    <!-- Mobile & Collapsed Mini Logo -->
    <a class="navbar-brand brand-logo-mini d-flex d-lg-none align-items-center justify-content-center m-0 p-0" href="{{ route('dashboard') }}">
      <img src="{{ asset('assets/img/bi-logo-mini-full2.png') }}" alt="logo" style="height: 32px; max-width: 100%; margin: 0;"/>
    </a>
  </div>
 
  <!-- Navbar Main Controls -->
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between px-3 px-md-4">
    <!-- Sidebar Toggle Button (Desktop & Tablet) -->
    <button class="navbar-toggler navbar-toggler align-self-center border-0 bg-transparent text-dark p-2" type="button" data-toggle="minimize" title="Toggle Sidebar">
      <i class="bi bi-text-indent-left fs-4 text-primary"></i>
    </button>

    <!-- Center System Status & Current Date -->
    <div class="d-none d-md-flex align-items-center gap-2">
      <div class="admin-header-pill">
        <span class="d-inline-block rounded-circle bg-success" style="width: 8px; height: 8px; box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2);"></span>
        <span>Online</span>
      </div>
      <div class="admin-header-pill">
        <i class="bi bi-calendar3 text-warning"></i>
        <span>{{ date('l, M j, Y') }}</span>
      </div>
    </div>

    <!-- Right Actions & Profile -->
    <div class="d-flex align-items-center gap-2">
      <!-- Live Website Link -->
      <a href="{{ route('welcome') }}" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill px-3 d-none d-sm-inline-flex">
        <i class="bi bi-box-arrow-up-right me-1"></i> View Live Site
      </a>

      <!-- Profile Dropdown -->
      <ul class="navbar-nav navbar-nav-right m-0">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center gap-2 p-1" href="#" data-bs-toggle="dropdown" id="profileDropdown" aria-expanded="false">
            <div class="avatar-badge">
              BI
            </div>
            <div class="d-none d-lg-flex flex-column text-start me-1">
              <span class="fw-bold text-dark lh-1" style="font-size: 0.85rem;">Super Admin</span>
              <span class="text-muted" style="font-size: 0.7rem;">bimboilori@gmail.com</span>
            </div>
            <i class="bi bi-chevron-down text-muted d-none d-lg-inline" style="font-size: 0.75rem;"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown shadow-lg border-0 rounded-4 mt-2" aria-labelledby="profileDropdown">
            <div class="px-3 py-2 border-bottom mb-2 bg-light rounded-top">
              <p class="fw-bold text-dark mb-0 small">Bimbo Ilori Administration</p>
              <small class="text-muted">Master Access</small>
            </div>
            <a class="dropdown-item py-2" href="{{ route('welcome') }}" target="_blank">
              <i class="bi bi-globe text-primary me-2"></i> Visit Live Site
            </a>
            <div class="dropdown-divider my-1"></div>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="dropdown-item py-2 text-danger w-100 text-start border-0 bg-transparent">
                <i class="bi bi-box-arrow-right me-2"></i> Log Out
              </button>
            </form>
          </div>
        </li>
      </ul>

      <!-- Mobile Offcanvas Toggle -->
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center border-0 bg-transparent p-2 text-dark" type="button" data-toggle="offcanvas" title="Open Mobile Menu">
        <i class="bi bi-list fs-3"></i>
      </button>
    </div>
  </div>
</nav>
