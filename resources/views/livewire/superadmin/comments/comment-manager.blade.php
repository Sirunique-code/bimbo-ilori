<div>
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                <div>
                    <h3 class="font-weight-bold mb-1 text-dark">Article Comments &amp; Reader Questions</h3>
                    <p class="text-muted mb-0">Manage reader feedback, address questions, and publish verified author responses</p>
                </div>
                <div>
                    <a href="{{ route('purpose-insight') }}" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill">
                        <i class="ti-world me-1"></i> View Purpose Insights on Site
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Cards Row -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3 mb-md-0">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="rounded-circle p-3 me-3 d-flex align-items-center justify-content-center" style="background-color: #EDE7F8; color: #3F207F; width: 48px; height: 48px;">
                        <i class="ti-comments fs-4"></i>
                    </div>
                    <div>
                        <h4 class="font-weight-bold mb-0 text-dark">{{ $stats['total'] }}</h4>
                        <small class="text-muted">Total Contributions</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3 mb-md-0">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="rounded-circle p-3 me-3 d-flex align-items-center justify-content-center bg-info text-white" style="width: 48px; height: 48px;">
                        <i class="ti-help-alt fs-4"></i>
                    </div>
                    <div>
                        <h4 class="font-weight-bold mb-0 text-dark">{{ $stats['questions'] }}</h4>
                        <small class="text-muted">Reader Questions</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3 mb-md-0">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="rounded-circle p-3 me-3 d-flex align-items-center justify-content-center bg-success text-white" style="width: 48px; height: 48px;">
                        <i class="ti-light-bulb fs-4"></i>
                    </div>
                    <div>
                        <h4 class="font-weight-bold mb-0 text-dark">{{ $stats['feedback'] }}</h4>
                        <small class="text-muted">Reflections &amp; Feedback</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3 mb-md-0">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="rounded-circle p-3 me-3 d-flex align-items-center justify-content-center" style="background-color: #FFF4D9; color: #B38600; width: 48px; height: 48px;">
                        <i class="ti-check-box fs-4"></i>
                    </div>
                    <div>
                        <h4 class="font-weight-bold mb-0 text-dark">{{ $stats['replied'] }}</h4>
                        <small class="text-muted">Author Answered</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Flash Message -->
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4" role="alert">
            <i class="ti-check me-2"></i> {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Author Reply Panel (when an item is selected for reply) -->
    @if($replyingCommentId)
        @php $activeComment = \App\Models\Comment::find($replyingCommentId); @endphp
        @if($activeComment)
            <div class="card mb-4 border-primary shadow-sm rounded-3" style="border-width: 2px;">
                <div class="card-header bg-primary text-white py-3 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 text-white font-weight-bold">
                        <i class="ti-comment-alt me-2"></i> Write Author Response to {{ $activeComment->name }}
                    </h5>
                    <button type="button" wire:click="cancelReply" class="btn btn-sm btn-light font-weight-bold">
                        <i class="ti-close me-1"></i> Cancel
                    </button>
                </div>
                <div class="card-body">
                    <div class="p-3 bg-light rounded-3 mb-3 border-start border-4 border-info">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <strong>{{ $activeComment->name }}</strong>
                            <span class="badge {{ $activeComment->type_badge['class'] }}">{{ $activeComment->type_badge['label'] }}</span>
                            <small class="text-muted">on article: <em>{{ $activeComment->purposeInsight->title ?? 'N/A' }}</em></small>
                        </div>
                        <p class="mb-0 text-dark" style="white-space: pre-line;">"{{ $activeComment->comment }}"</p>
                    </div>

                    <form wire:submit.prevent="saveReply">
                        <div class="mb-3">
                            <label class="form-label font-weight-bold">Author Reply (will appear with verified badge on the article):</label>
                            <textarea wire:model="replyText" rows="4" class="form-control" placeholder="Write your warm, insightful response to this reader..." required></textarea>
                            @error('replyText') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <button type="button" wire:click="cancelReply" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary font-weight-bold text-white">
                                <i class="ti-check me-1"></i> Publish Author Reply
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        @endif
    @endif

    <!-- Filters Card -->
    <div class="card mb-4 border-0 shadow-sm rounded-3">
        <div class="card-body p-3">
            <div class="row g-2 align-items-center">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="ti-search text-muted"></i>
                        </span>
                        <input type="text" wire:model.live.debounce.300ms="search" class="form-control border-start-0" placeholder="Search by name, email, or keywords...">
                    </div>
                </div>
                <div class="col-md-3">
                    <select wire:model.live="filterInsightId" class="form-select form-control">
                        <option value="">-- All Articles --</option>
                        @foreach($insights as $ins)
                            <option value="{{ $ins->id }}">{{ Str::limit($ins->title, 40) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <select wire:model.live="filterType" class="form-select form-control">
                        <option value="">-- All Types --</option>
                        <option value="question">Questions Only</option>
                        <option value="feedback">Feedback / Takeaways</option>
                        <option value="comment">General Comments</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select wire:model.live="filterStatus" class="form-select form-control">
                        <option value="">-- All Status --</option>
                        <option value="1">Approved / Visible</option>
                        <option value="0">Hidden / Unapproved</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Comments Table Card -->
    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-header bg-white py-3 border-bottom d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0 font-weight-bold text-dark">
                <i class="ti-list me-2 text-primary"></i> Reader Submissions ({{ $comments->total() }})
            </h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 220px;">Reader Info</th>
                            <th style="width: 130px;">Type</th>
                            <th style="width: 220px;">Article</th>
                            <th>Comment / Question &amp; Author Reply</th>
                            <th style="width: 100px;">Status</th>
                            <th style="width: 110px;">Date</th>
                            <th style="width: 160px;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($comments as $item)
                            <tr class="{{ $replyingCommentId === $item->id ? 'table-warning' : '' }}">
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ $item->avatar_url }}" alt="{{ $item->name }}" class="rounded-circle" style="width: 38px; height: 38px;">
                                        <div>
                                            <div class="font-weight-bold text-dark text-truncate" style="max-width: 150px;">{{ $item->name }}</div>
                                            <small class="text-muted text-truncate d-block" style="max-width: 150px;">{{ $item->email }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @php $badge = $item->type_badge; @endphp
                                    <span class="badge {{ $badge['class'] }} rounded-pill small">
                                        <i class="{{ $badge['icon'] }} me-1"></i> {{ $badge['label'] }}
                                    </span>
                                </td>
                                <td>
                                    @if($item->purposeInsight)
                                        <a href="{{ route('purpose-insight.show', $item->purposeInsight->slug) }}#comment-{{ $item->id }}" target="_blank" class="text-decoration-none font-weight-bold text-dark small" title="{{ $item->purposeInsight->title }}">
                                            {{ Str::limit($item->purposeInsight->title, 35) }} <i class="ti-new-window small text-muted"></i>
                                        </a>
                                    @else
                                        <span class="text-muted small">Article Deleted</span>
                                    @endif
                                </td>
                                <td>
                                    <p class="mb-1 text-dark small lh-base" style="white-space: pre-line;">{{ $item->comment }}</p>

                                    <!-- Author Reply if exists -->
                                    @if(!empty($item->admin_reply))
                                        <div class="p-2 rounded bg-light border-start border-3 border-warning mt-2 small">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <strong class="text-primary"><i class="ti-star me-1 text-warning"></i> Author Reply:</strong>
                                                <button type="button" wire:click="deleteReply({{ $item->id }})" class="btn btn-link btn-xs text-danger p-0 text-decoration-none" title="Delete author reply" onclick="return confirm('Remove author reply?')">
                                                    <i class="ti-trash"></i> Remove Reply
                                                </button>
                                            </div>
                                            <div class="text-muted">{{ $item->admin_reply }}</div>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    @if($item->is_approved)
                                        <span class="badge bg-success">Visible</span>
                                    @else
                                        <span class="badge bg-warning text-dark">Hidden</span>
                                    @endif
                                </td>
                                <td>
                                    <small class="text-muted">{{ $item->created_at->format('M d, Y') }}</small>
                                    <small class="d-block text-muted" style="font-size: 0.75rem;">{{ $item->created_at->format('H:i') }}</small>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm" role="group">
                                        <button type="button" wire:click="startReply({{ $item->id }})" class="btn {{ !empty($item->admin_reply) ? 'btn-outline-warning' : 'btn-outline-primary' }}" title="{{ !empty($item->admin_reply) ? 'Edit author reply' : 'Reply to reader' }}">
                                            <i class="ti-comment"></i> {{ !empty($item->admin_reply) ? 'Edit Reply' : 'Reply' }}
                                        </button>
                                        <button type="button" wire:click="toggleStatus({{ $item->id }})" class="btn btn-outline-secondary" title="{{ $item->is_approved ? 'Hide comment' : 'Approve comment' }}">
                                            <i class="{{ $item->is_approved ? 'ti-eye' : 'ti-check' }}"></i>
                                        </button>
                                        <button type="button" wire:click="delete({{ $item->id }})" class="btn btn-outline-danger" title="Delete comment" onclick="return confirm('Are you sure you want to permanently delete this comment?')">
                                            <i class="ti-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-5 text-muted">
                                    <i class="ti-comments fs-1 d-block mb-2 text-muted"></i>
                                    No reader comments or questions found matching the filter criteria.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($comments->hasPages())
                <div class="p-3 border-top d-flex justify-content-end">
                    {{ $comments->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
