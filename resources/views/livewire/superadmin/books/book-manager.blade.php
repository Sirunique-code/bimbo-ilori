<div>
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="font-weight-bold mb-0">Books Management</h3>
            <p class="text-muted mb-0">Manage LPPD & STC series books and direct buy links</p>
        </div>
        <button class="btn btn-primary" wire:click="showCreateForm">
            <i class="ti-plus me-1"></i> Add New Book
        </button>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="ti-check me-2"></i> {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Book Form -->
    @if ($showForm)
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-primary text-white py-3">
                <h5 class="card-title mb-0 text-white font-weight-bold">
                    <i class="ti-pencil-alt me-2"></i> {{ $isEditMode ? 'Edit Book Details' : 'Add New Book' }}
                </h5>
            </div>
            <div class="card-body p-4">
                <form wire:submit.prevent="{{ $isEditMode ? 'update' : 'store' }}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label font-weight-bold">Book Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" wire:model="title" placeholder="e.g. Portrait of Purpose" required>
                            @error('title') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label font-weight-bold">Category <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" wire:model="category" placeholder="e.g. 1. Faith Development Titles" required>
                            @error('category') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label font-weight-bold">Description</label>
                            <textarea class="form-control" rows="4" wire:model="description" placeholder="Short description of the book..."></textarea>
                            @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label font-weight-bold">Book Cover Image</label>
                            <input type="file" class="form-control" wire:model="image">
                            @if ($image)
                                <div class="mt-2">
                                    <img src="{{ $image->temporaryUrl() }}" class="rounded shadow-sm" style="height: 80px; object-fit: cover;">
                                </div>
                            @elseif ($isEditMode && $existing_image)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $existing_image) }}" class="rounded shadow-sm" style="height: 80px; object-fit: cover;">
                                </div>
                            @endif
                            @error('image') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label font-weight-bold">Amazon Buy Link</label>
                            <input type="url" class="form-control" wire:model="amazon_link" placeholder="https://amazon.com/dp/...">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label font-weight-bold">Selar Digital Buy Link</label>
                            <input type="url" class="form-control" wire:model="selar_link" placeholder="https://selar.com/...">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label font-weight-bold">Paystack Digital / Paperback Link</label>
                            <input type="url" class="form-control" wire:model="paystack_link" placeholder="https://paystack.shop/...">
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-3">
                        <button type="button" class="btn btn-secondary me-2" wire:click="resetInputFields">Cancel</button>
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="ti-save me-1"></i> {{ $isEditMode ? 'Update Book' : 'Save Book' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif

    <!-- Books List Table -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-light py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 font-weight-bold"><i class="ti-book me-2"></i> All Published Books</h5>
            <span class="badge bg-primary rounded-pill">{{ count($books) }} Books</span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Cover</th>
                            <th>Title & Description</th>
                            <th>Category</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($books as $book)
                            <tr>
                                <td style="width: 70px;">
                                    @if($book->image)
                                        <img src="{{ asset('storage/' . $book->image) }}" class="rounded shadow-sm" style="width: 45px; height: 60px; object-fit: cover;">
                                    @else
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center text-muted" style="width: 45px; height: 60px;">
                                            <i class="ti-book"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <h6 class="font-weight-bold mb-1 text-dark">{{ $book->title }}</h6>
                                    <p class="text-muted small mb-0 text-truncate" style="max-width: 380px;">
                                        {{ Str::limit(strip_tags($book->description), 100) }}
                                    </p>
                                </td>
                                <td>
                                    <span class="badge badge-purple px-3 py-2 rounded-pill">{{ $book->category }}</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-primary" wire:click="edit({{ $book->id }})" title="Edit">
                                            <i class="ti-pencil"></i> Edit
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" wire:click="delete({{ $book->id }})" title="Delete" onclick="return confirm('Are you sure you want to delete this book?')">
                                            <i class="ti-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">
                                    No books found. Click "Add New Book" above to get started!
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
