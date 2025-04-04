<x-app-layout>
    <div class="container-fluid">
        <h1 class="mb-4">Welcome to the Admin Dashboard</h1>

        <div class="row">
            <div class="col-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5>Total Books</h5>
                        <h3>{{ $totalBooks }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5>Total Courses</h5>
                        <h3>{{ $totalCourses }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <h5>Total Testimonials</h5>
                        <h3>{{ $totalTestimonials }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h5>Total Quotes</h5>
                        <h3>{{ $totalQuotes }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ route('logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</x-app-layout>
