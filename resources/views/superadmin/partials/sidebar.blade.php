<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="ti-shield menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <!-- Courses Management -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#courses-menu" aria-expanded="false" aria-controls="courses-menu">
        <i class="ti-book menu-icon"></i>
        <span class="menu-title">Courses</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="courses-menu">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> 
            <a class="nav-link" href="{{ route('superadmin.courses.index') }}">Manage Courses</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="{{ route('superadmin.courses.create') }}">Add New Course</a>
          </li>
        </ul>
      </div>
    </li>

    <!-- Books Management -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#books-menu" aria-expanded="false" aria-controls="books-menu">
        <i class="ti-bookmark menu-icon"></i>
        <span class="menu-title">Books</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="books-menu">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> 
            <a class="nav-link" href="#">Manage Books</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="#">Add New Book</a>
          </li>
        </ul>
      </div>
    </li>

    <!-- Testimonials Management -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#testimonials-menu" aria-expanded="false" aria-controls="testimonials-menu">
        <i class="ti-comment-alt menu-icon"></i>
        <span class="menu-title">Testimonials</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="testimonials-menu">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> 
            <a class="nav-link" href="#">Manage Testimonials</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="#">Add New Testimonial</a>
          </li>
        </ul>
      </div>
    </li>

    <!-- User Management (Only for Super Admin) -->
    @if(auth()->check() && auth()->user()->role === 'Super Admin')
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="ti-user menu-icon"></i>
        <span class="menu-title">User Management</span>
      </a>
    </li>
    @endif

    <!-- Settings -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="ti-settings menu-icon"></i>
        <span class="menu-title">Settings</span>
      </a>
    </li>
  </ul>
</nav>
