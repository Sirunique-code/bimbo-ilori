<div>
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="font-weight-bold mb-0">Testimonials Gallery</h3>
            <p class="text-muted mb-0">Upload and manage testimonial image cards shown on the website</p>
        </div>
        <button class="btn btn-primary" wire:click="showCreateForm">
            <i class="ti-plus me-1"></i> Add Testimonial Image
        </button>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="ti-check me-2"></i> {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Upload Form Card -->
    @if ($showForm)
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-primary text-white py-3">
                <h5 class="card-title mb-0 text-white font-weight-bold">
                    <i class="ti-upload me-2"></i> Upload New Testimonial Image
                </h5>
            </div>
            <div class="card-body p-4">
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label class="form-label font-weight-bold">Select Testimonial Image <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" wire:model="image" required>
                        @if ($image)
                            <div class="mt-3">
                                <small class="text-muted d-block mb-1">Preview:</small>
                                <img src="{{ $image->temporaryUrl() }}" class="rounded shadow-sm" style="max-height: 150px; object-fit: cover;">
                            </div>
                        @endif
                        @error('image') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-3">
                        <button type="button" class="btn btn-secondary me-2" wire:click="resetInputFields">Cancel</button>
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="ti-cloud-up me-1"></i> Upload Image
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif

    <!-- Testimonials Grid -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-light py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 font-weight-bold"><i class="ti-comment-alt me-2"></i> Testimonial Images</h5>
            <span class="badge bg-primary rounded-pill">{{ count($testimonials) }} Images</span>
        </div>
        <div class="card-body p-4">
            <div class="row g-4">
                @forelse ($testimonials as $testimonial)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 border shadow-sm rounded-3 overflow-hidden position-relative group">
                            <img src="{{ asset('storage/' . $testimonial->image) }}" class="card-img-top" style="height: 180px; object-fit: cover;" alt="Testimonial">
                            <div class="card-body p-3 bg-white d-flex align-items-center justify-content-between border-top">
                                <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> {{ $testimonial->created_at->format('M d, Y') }}</small>
                                <button class="btn btn-sm btn-outline-danger rounded-circle p-2" wire:click="delete({{ $testimonial->id }})" title="Delete" onclick="return confirm('Delete this testimonial image?')">
                                    <i class="ti-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5 text-muted">
                        No testimonial images uploaded yet. Click "Add Testimonial Image" to upload!
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
