<div class="container-fluid">
    <h1 class="mb-4 text-center" style="background-color: #4B0082; color: white; padding: 1rem;">Admin Dashboard</h1>

    <div class="row gy-4 mt-3">
        <!-- Total Books -->
        <div class="col-md-3">
            <div class="card shadow-lg" style="background-color: #6A0DAD;">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h5 class="card-title" style="color: white;">Total Books</h5>
                        <h3 class="card-text" style="color: white;">{{ $totalBooks }}</h3>
                    </div>
                    <img src="{{ asset('assets/img/books-icon.png') }}" alt="Books Icon" width="50" height="50">
                </div>
            </div>
        </div>

        <!-- Total Courses -->
        <div class="col-md-3">
            <div class="card shadow-lg" style="background-color: #7C3AED;">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h5 class="card-title" style="color: white;">Total Courses</h5>
                        <h3 class="card-text" style="color: white;">{{ $totalCourses }}</h3>
                    </div>
                    <img src="{{ asset('assets/img/courses-icon.png') }}" alt="Courses Icon" width="50" height="50">
                </div>
            </div>
        </div>

        <!-- Total Testimonials -->
        <div class="col-md-3">
            <div class="card shadow-lg" style="background-color: #9336B4;">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h5 class="card-title" style="color: white;">Total Testimonials</h5>
                        <h3 class="card-text" style="color: white;">{{ $totalTestimonials }}</h3>
                    </div>
                    <img src="{{ asset('assets/img/testimonials-icon.png') }}" alt="Testimonials Icon" width="50" height="50">
                </div>
            </div>
        </div>

        <!-- Total Quotes -->
        <div class="col-md-3">
            <div class="card shadow-lg" style="background-color: #B163C6;">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h5 class="card-title" style="color: white;">Total Quotes</h5>
                        <h3 class="card-text" style="color: white;">{{ $totalQuotes }}</h3>
                    </div>
                    <img src="{{ asset('assets/img/quotes-icon.png') }}" alt="Quotes Icon" width="50" height="50">
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Button -->
    <div class="text-center mt-5">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-light shadow-sm text-dark">
                <i class="fas fa-sign-out-alt me-2"></i>Logout
            </button>
        </form>
    </div>
</div>