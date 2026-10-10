<div>
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="font-weight-bold mb-0">Courses & Coaching Programs</h3>
            <p class="text-muted mb-0">Manage life purpose coaching programs, pricing, and registration links</p>
        </div>
        <a href="{{ route('superadmin.courses.create') }}" class="btn btn-primary">
            <i class="ti-plus me-1"></i> Add New Course
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="ti-check me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Courses Table -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-light py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 font-weight-bold"><i class="ti-panel me-2"></i> All Active Programs</h5>
            <span class="badge bg-primary rounded-pill">{{ count($courses) }} Programs</span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">#</th>
                            <th>Image</th>
                            <th>Program Title</th>
                            <th>Pricing (USD / NGN)</th>
                            <th>Duration</th>
                            <th>Links</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($courses as $key => $course)
                            <tr wire:key="course-{{ $course->id }}">
                                <td class="ps-4 text-muted font-weight-bold">{{ $key + 1 }}</td>
                                <td>
                                    <img src="{{ $course->course_image ? asset('storage/' . $course->course_image) : asset('assets/img/featured-image.jpg') }}" 
                                         alt="{{ $course->course_title }}" class="rounded shadow-sm" style="width: 60px; height: 45px; object-fit: cover;">
                                </td>
                                <td>
                                    <h6 class="font-weight-bold mb-0 text-dark">{{ $course->course_title }}</h6>
                                </td>
                                <td>
                                    <span class="fw-bold text-success">${{ number_format($course->course_price_usd, 2) }}</span>
                                    <br>
                                    <small class="text-primary fw-semibold">₦{{ number_format($course->course_price_ngn, 2) }}</small>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark border">{{ $course->course_duration }}</span>
                                </td>
                                <td>
                                    <div class="d-flex gap-1">
                                        @if($course->register_link)
                                            <a href="{{ $course->register_link }}" target="_blank" class="btn btn-sm btn-outline-info rounded-pill px-3">
                                                <i class="fa fa-external-link-alt me-1"></i> Register Link
                                            </a>
                                        @endif
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('superadmin.courses.edit', $course->id) }}" class="btn btn-sm btn-outline-primary" title="Edit Course">
                                            <i class="ti-pencil"></i> Edit
                                        </a>
                                        <button class="btn btn-sm btn-outline-danger" onclick="if(confirm('Are you sure you want to delete this course?')) Livewire.dispatch('confirmDelete', { id: {{ $course->id }} })" title="Delete">
                                            <i class="ti-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">
                                    No courses found. Click "Add New Course" above to create your first program!
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
