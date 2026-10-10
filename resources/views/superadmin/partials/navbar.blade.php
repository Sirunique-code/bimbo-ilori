<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="navbar-brand-wrapper d-flex align-items-center justify-content-center px-3" style="background: #151022;">
    <a class="navbar-brand brand-logo" href="{{ route('dashboard')}}">
      <img src="{{ asset('assets/img/bi-logo-full2.png') }}" alt="logo" style="height: 32px; filter: brightness(0) invert(1);"/>
    </a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard')}}">
      <img src="{{ asset('assets/img/bi-logo-mini-full2.png') }}" alt="logo" style="height: 28px;"/>
    </a>
  </div>
 
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between px-4">
    <button class="navbar-toggler navbar-toggler align-self-center border-0 bg-transparent text-dark" type="button" data-toggle="minimize">
      <i class="ti-view-list fs-5"></i>
    </button>

    <div class="d-none d-md-flex align-items-center gap-3">
      <span class="badge bg-light text-primary border px-3 py-2 rounded-pill fw-semibold">
        <i class="far fa-clock me-1 text-warning"></i> {{ date('l, F j, Y') }}
      </span>
      <a href="{{ route('welcome') }}" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill px-3 fw-bold">
        <i class="fa fa-external-link-alt me-1"></i> View Website
      </a>
    </div>

    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" data-bs-toggle="dropdown" id="profileDropdown">
          <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center fw-bold shadow-sm" style="width: 38px; height: 38px; background: #3F207F !important;">
            BI
          </div>
          <span class="d-none d-lg-inline-block font-weight-bold text-dark me-1">Super Admin</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown shadow-lg border-0 rounded-3 mt-2" aria-labelledby="profileDropdown">
          <a class="dropdown-item py-2" href="{{ route('welcome') }}" target="_blank">
            <i class="ti-world text-primary me-2"></i> Visit Live Site
          </a>
          <div class="dropdown-divider"></div>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="dropdown-item py-2 text-danger">
              <i class="ti-power-off me-2"></i> Logout
            </button>
          </form>
        </div>
      </li>
    </ul>

    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="ti-view-list"></span>
    </button>
  </div>
</nav>
