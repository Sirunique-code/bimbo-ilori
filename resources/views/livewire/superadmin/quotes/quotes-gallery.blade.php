<div>
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="font-weight-bold mb-0">Quotes Gallery</h3>
            <p class="text-muted mb-0">Upload inspirational quote cards for the testimonials & quotes section</p>
        </div>
    </div>

    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="ti-check me-2"></i> {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Add Quote Form Card -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-primary text-white py-3">
            <h5 class="card-title mb-0 text-white font-weight-bold">
                <i class="ti-image me-2"></i> Upload New Quote Image
            </h5>
        </div>
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-md-0">
                    <label class="form-label font-weight-bold">Select Quote Image <span class="text-danger">*</span></label>
                    <input type="file" wire:model="image" class="form-control">
                    @error('image') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-4 text-md-end">
                    <button wire:click="addQuote" class="btn btn-primary px-4 w-100 w-md-auto mt-md-4">
                        <i class="ti-upload me-1"></i> Upload Quote
                    </button>
                </div>
            </div>
            @if ($image)
                <div class="mt-3">
                    <small class="text-muted d-block mb-1">Preview:</small>
                    <img src="{{ $image->temporaryUrl() }}" class="rounded shadow-sm" style="max-height: 150px; object-fit: cover;">
                </div>
            @endif
        </div>
    </div>

    <!-- Display Quotes Grid -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-light py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 font-weight-bold"><i class="ti-gallery me-2"></i> Uploaded Quotes</h5>
            <span class="badge bg-primary rounded-pill">{{ count($quotes) }} Quotes</span>
        </div>
        <div class="card-body p-4">
            <div class="row g-4">
                @forelse($quotes as $quote)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 border shadow-sm rounded-3 overflow-hidden position-relative">
                            <img class="img-fluid rounded-top" src="{{ asset('storage/' . $quote->image) }}" alt="Quote" style="height: 180px; object-fit: cover;">
                            <div class="card-body p-3 bg-white d-flex align-items-center justify-content-between border-top">
                                <small class="text-muted"><i class="far fa-image me-1"></i> Quote</small>
                                <button wire:click="deleteQuote({{ $quote->id }})" class="btn btn-sm btn-outline-danger rounded-circle p-2" title="Delete Quote" onclick="return confirm('Delete this quote?')">
                                    <i class="ti-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5 text-muted">
                        No quote images uploaded yet. Select an image above to upload!
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
