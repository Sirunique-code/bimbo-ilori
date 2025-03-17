<nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
      <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="{{ route('dashboard') }}">
        <img src="{{ asset('assets/admin/images/logo-mini.svg') }}" alt="logo" />
      </a>
      <button class="navbar-toggler navbar-toggler align-self-center me-2" type="button" data-toggle="minimize">
        <i class="mdi mdi-menu"></i>
      </button>
      <ul class="navbar-nav navbar-nav-right ml-lg-auto">
        <li class="nav-item nav-profile dropdown border-0">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown">
            <img class="nav-profile-img me-2" alt="" src="{{ asset('assets/admin/images/faces/face1.jpg') }}">
            <span class="profile-name">Admin</span>
          </a>
          <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-account me-2 text-primary"></i> My Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-logout me-2 text-danger"></i> Logout
            </a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  