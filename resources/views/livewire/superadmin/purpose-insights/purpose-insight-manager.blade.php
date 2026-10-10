<div>
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="font-weight-bold mb-0">Purpose Insights Management</h3>
                    <p class="text-muted mb-0">Create, publish, and broadcast opening tips to email subscribers</p>
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="ti-check me-2"></i> {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Create / Edit Form Card -->
    <div class="card mb-4 shadow-sm border-0">
        <div class="card-header bg-primary text-white py-3">
            <h5 class="card-title mb-0 text-white font-weight-bold">
                <i class="ti-pencil-alt me-2"></i> {{ $isEditing ? 'Edit Purpose Insight Article' : 'Create New Purpose Insight Article' }}
            </h5>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="save">
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label class="form-label font-weight-bold">Article Title <span class="text-danger">*</span></label>
                        <input type="text" wire:model="title" class="form-control" placeholder="e.g. Navigating Pivotal Seasons with Wisdom" required>
                        @error('title') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label font-weight-bold">Category <span class="text-danger">*</span></label>
                        <select wire:model="category" class="form-select form-control" required>
                            <option value="">-- Select Category --</option>
                            @foreach($categories as $catName => $seriesName)
                                <option value="{{ $catName }}">{{ $catName }} ({{ $seriesName }})</option>
                            @endforeach
                        </select>
                        @error('category') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label font-weight-bold">
                            Opening Tip / Teaser Excerpt <span class="text-danger">*</span>
                            <small class="text-muted">(This is the snippet sent in emails to subscribers with the 'Read More' link)</small>
                        </label>
                        <textarea wire:model="opening_tip" class="form-control" rows="3" placeholder="Write the opening teaser/insight here..." required></textarea>
                        @error('opening_tip') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label font-weight-bold">Full Article Content <span class="text-danger">*</span></label>
                        <textarea wire:model="content" class="form-control" rows="8" placeholder="Write full article body here..." required></textarea>
                        @error('content') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label font-weight-bold">Featured Cover Image (Optional)</label>
                        <input type="file" wire:model="image" class="form-control">
                        @if($existing_image && !$image)
                            <div class="mt-2">
                                <small class="text-muted">Current Cover:</small><br>
                                <img src="{{ asset('storage/' . $existing_image) }}" class="rounded shadow-sm" style="height: 60px; object-fit: cover;">
                            </div>
                        @endif
                        @error('image') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-6 mb-3 d-flex align-items-center">
                        <div class="form-check form-switch me-4">
                            <input class="form-check-input" type="checkbox" wire:model="is_published" id="isPublishedCheck">
                            <label class="form-check-label font-weight-bold" for="isPublishedCheck">Publish Immediately</label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" wire:model="notify_subscribers" id="notifySubscribersCheck">
                            <label class="form-check-label font-weight-bold text-primary" for="notifySubscribersCheck">
                                <i class="ti-email me-1"></i> Send Opening Tip Email to All Subscribers
                            </label>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-3">
                    @if($isEditing)
                        <button type="button" wire:click="resetFields" class="btn btn-secondary me-2">Cancel Edit</button>
                    @endif
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="ti-save me-1"></i> {{ $isEditing ? 'Update Article' : 'Publish & Broadcast' }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Articles List Table -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-light py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 font-weight-bold"><i class="ti-layers-alt me-2"></i> All Purpose Insight Articles</h5>
            <span class="badge bg-primary rounded-pill">{{ count($insights) }} Articles</span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 60px;">Cover</th>
                            <th style="min-width: 220px;">Title & Opening Tip</th>
                            <th style="min-width: 160px;">Category</th>
                            <th style="width: 100px;">Status</th>
                            <th style="width: 120px;">Published</th>
                            <th class="text-center" style="width: 220px; white-space: nowrap;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($insights as $item)
                            <tr>
                                <td>
                                    @if($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" class="rounded shadow-sm" style="width: 45px; height: 45px; object-fit: cover;">
                                    @else
                                        <div class="bg-secondary text-white rounded d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                            <i class="ti-file"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <h6 class="font-weight-bold mb-1 text-dark text-truncate" style="max-width: 240px;" title="{{ $item->title }}">{{ $item->title }}</h6>
                                    <p class="text-muted small mb-0 text-truncate" style="max-width: 240px;" title="{{ $item->opening_tip }}">
                                        "{{ $item->opening_tip }}"
                                    </p>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark border text-truncate" style="max-width: 150px;" title="{{ $item->category }}">{{ $item->category }}</span>
                                </td>
                                <td>
                                    @if($item->is_published)
                                        <span class="badge bg-success">Published</span>
                                    @else
                                        <span class="badge bg-warning text-dark">Draft</span>
                                    @endif
                                </td>
                                <td>
                                    <small class="text-muted">{{ $item->created_at->format('M d, Y') }}</small>
                                </td>
                                <td class="text-center" style="white-space: nowrap;">
                                    <div class="d-inline-flex gap-1">
                                        <a href="{{ route('purpose-insight.show', $item->slug) }}" target="_blank" class="btn btn-xs btn-sm btn-outline-info" title="View on Site">
                                            <i class="ti-eye"></i> View
                                        </a>
                                        <button wire:click="broadcastToSubscribers({{ $item->id }})" class="btn btn-xs btn-sm btn-outline-warning" title="Send Opening Tip Email to Subscribers" onclick="return confirm('Send opening tip email for this post to all subscribers?')">
                                            <i class="ti-email"></i> Email
                                        </button>
                                        <button wire:click="edit({{ $item->id }})" class="btn btn-xs btn-sm btn-outline-primary" title="Edit Article">
                                            <i class="ti-pencil"></i> Edit
                                        </button>
                                        <button wire:click="delete({{ $item->id }})" class="btn btn-xs btn-sm btn-outline-danger" title="Delete Article" onclick="return confirm('Are you sure you want to delete this article?')">
                                            <i class="ti-trash"></i> Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">
                                    No Purpose Insight articles created yet. Fill out the form above to add your first article!
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
