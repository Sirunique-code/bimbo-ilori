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
    <div id="purpose-insight-form-card" class="card mb-4 shadow-sm border-0 {{ $isEditing ? 'border border-primary' : '' }}" style="{{ $isEditing ? 'border-width: 2px !important;' : '' }}">
        <div class="card-header bg-primary text-white py-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-2">
                <h5 class="card-title mb-0 text-white font-weight-bold">
                    <i class="{{ $isEditing ? 'ti-pencil-alt' : 'ti-plus' }} me-2"></i> 
                    {{ $isEditing ? 'Edit Purpose Insight Article' : 'Create New Purpose Insight Article' }}
                </h5>
                @if($isEditing)
                    <span class="badge bg-warning text-dark font-weight-bold ms-2">EDITING MODE</span>
                @endif
            </div>
            @if($isEditing)
                <button type="button" wire:click="resetFields" class="btn btn-sm btn-light font-weight-bold">
                    <i class="ti-close me-1"></i> Cancel Edit
                </button>
            @endif
        </div>
        <div class="card-body">
            @if($isEditing)
                <div class="alert alert-info py-2 px-3 mb-3 d-flex align-items-center justify-content-between">
                    <div>
                        <i class="ti-info-alt me-2"></i> You are currently editing: <strong>"{{ Str::limit($title, 60) }}"</strong>
                    </div>
                    <button type="button" wire:click="resetFields" class="btn btn-link btn-sm text-info p-0 text-decoration-none font-weight-bold">
                        Switch to Create New
                    </button>
                </div>
            @endif

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
                        <label class="form-label font-weight-bold d-flex align-items-center gap-1 mb-1">
                            <i class="ti-image text-primary"></i> Featured Cover Image (Optional)
                        </label>
                        <small class="text-muted d-block mb-2">Used as the article cover image and the link preview image when shared on WhatsApp, Facebook, LinkedIn, Twitter/X, etc.</small>
                        <input type="file" wire:model="image" class="form-control" accept="image/*">
                        
                        <div wire:loading wire:target="image" class="text-primary small mt-1">
                            <i class="ti-reload fa-spin me-1"></i> Uploading preview...
                        </div>

                        {{-- If a new image was uploaded --}}
                        @if ($image)
                            <div class="mt-2 p-2 border rounded bg-light d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ $image->temporaryUrl() }}" class="rounded shadow-sm" style="height: 50px; width: 70px; object-fit: cover;">
                                    <div>
                                        <span class="badge bg-success">New Image Selected</span>
                                        <small class="text-muted d-block">Will be active cover & social link preview upon saving</small>
                                    </div>
                                </div>
                                <button type="button" wire:click="cancelNewImage" class="btn btn-sm btn-outline-danger" title="Cancel this selection">
                                    <i class="ti-close"></i> Cancel
                                </button>
                            </div>
                        {{-- Else if there is an existing saved image --}}
                        @elseif ($existing_image)
                            <div class="mt-2 p-2 border rounded bg-light d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('storage/' . $existing_image) }}" class="rounded shadow-sm" style="height: 50px; width: 70px; object-fit: cover;">
                                    <div>
                                        <span class="badge bg-primary">Current Active Cover</span>
                                        <small class="text-muted d-block">Active on public site & used for social link previews</small>
                                    </div>
                                </div>
                                <button type="button" wire:click="removeExistingImage" class="btn btn-sm btn-outline-danger" title="Remove cover image">
                                    <i class="ti-trash"></i> Remove Image
                                </button>
                            </div>
                        @elseif ($remove_image)
                            <div class="mt-2 alert alert-warning py-1 px-2 small mb-0">
                                <i class="ti-info-alt me-1"></i> Current image will be removed upon updating.
                            </div>
                        @endif

                        @error('image') <span class="text-danger small d-block mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label font-weight-bold d-block">Publication & Email Broadcast</label>
                        <div class="p-3 bg-light rounded-3 border d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between gap-3">
                            <!-- Toggle 1: Publish Immediately -->
                            <label class="custom-admin-toggle mb-0" for="isPublishedCheck">
                                <input type="checkbox" wire:model="is_published" id="isPublishedCheck" class="custom-toggle-input">
                                <span class="custom-toggle-slider"></span>
                                <span class="custom-toggle-label font-weight-bold text-dark">
                                    Publish Immediately
                                </span>
                            </label>

                            <!-- Toggle 2: Send Email to Subscribers -->
                            <label class="custom-admin-toggle mb-0" for="notifySubscribersCheck">
                                <input type="checkbox" wire:model="notify_subscribers" id="notifySubscribersCheck" class="custom-toggle-input">
                                <span class="custom-toggle-slider slider-warning"></span>
                                <span class="custom-toggle-label font-weight-bold text-dark">
                                    <i class="ti-email text-warning me-1"></i> Send Email to Subscribers
                                </span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-3">
                    @if($isEditing)
                        <button type="button" wire:click="resetFields" class="btn btn-secondary me-2">
                            <i class="ti-close me-1"></i> Cancel Edit
                        </button>
                    @endif
                    <button type="submit" class="btn btn-primary px-4" wire:loading.attr="disabled" wire:target="save,image">
                        <span wire:loading.remove wire:target="save">
                            <i class="ti-save me-1"></i> {{ $isEditing ? 'Update Article' : 'Publish & Broadcast' }}
                        </span>
                        <span wire:loading wire:target="save">
                            <span class="spinner-border spinner-border-sm me-1" role="status"></span> Saving changes...
                        </span>
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
                            <th class="text-center" style="width: 240px; white-space: nowrap;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($insights as $item)
                            <tr wire:key="insight-row-{{ $item->id }}" class="{{ $insight_id === $item->id ? 'table-primary bg-opacity-10' : '' }}">
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
                                    <div class="d-flex align-items-center gap-2">
                                        <h6 class="font-weight-bold mb-1 text-dark text-truncate" style="max-width: 240px;" title="{{ $item->title }}">{{ $item->title }}</h6>
                                        @if($insight_id === $item->id)
                                            <span class="badge bg-warning text-dark font-weight-bold" style="font-size: 0.65rem;">EDITING</span>
                                        @endif
                                    </div>
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
                                        <button type="button" wire:click="broadcastToSubscribers({{ $item->id }})" class="btn btn-xs btn-sm btn-outline-warning" title="Send Opening Tip Email to Subscribers" onclick="return confirm('Send opening tip email for this post to all subscribers?')">
                                            <i class="ti-email"></i> Email
                                        </button>
                                        <button type="button" 
                                                wire:click="edit({{ $item->id }})" 
                                                wire:loading.attr="disabled"
                                                wire:target="edit({{ $item->id }})"
                                                onclick="document.getElementById('purpose-insight-form-card')?.scrollIntoView({ behavior: 'smooth' });"
                                                class="btn btn-xs btn-sm {{ $insight_id === $item->id ? 'btn-primary text-white' : 'btn-outline-primary' }}" 
                                                title="Edit Article">
                                            <span wire:loading.remove wire:target="edit({{ $item->id }})">
                                                <i class="ti-pencil"></i> Edit
                                            </span>
                                            <span wire:loading wire:target="edit({{ $item->id }})">
                                                <span class="spinner-border spinner-border-sm" role="status"></span>
                                            </span>
                                        </button>
                                        <button type="button" wire:click="delete({{ $item->id }})" class="btn btn-xs btn-sm btn-outline-danger" title="Delete Article" onclick="return confirm('Are you sure you want to delete this article?')">
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

<script>
    document.addEventListener('livewire:initialized', () => {
        Livewire.on('scroll-to-form', () => {
            const formCard = document.getElementById('purpose-insight-form-card');
            if (formCard) {
                formCard.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
</script>
