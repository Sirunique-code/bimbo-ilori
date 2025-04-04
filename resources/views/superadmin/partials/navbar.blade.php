<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
 
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="ti-view-list"></span>
    </button>
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo me-5" href="{{ route('dashboard')}}">
        <img src="{{ asset('assets/img/bi-logo-full2.png') }}" class="me-2" alt="logo"/>
      </a>
      <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard')}}">
        <img src="{{ asset('assets/img/bi-logo-mini-full2.png') }}" alt="logo"/>
      </a>
    </div>
    <ul class="navbar-nav navbar-nav-right">
    
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="{{ asset('assets/img/dummy-profile.png') }}" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="ti-view-list"></span>
    </button>
  </div>
</nav>
