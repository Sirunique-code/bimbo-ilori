<x-app-layout>
    <div>
        <!-- Page Header -->
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
            <div>
                <h3 class="fw-bold mb-0 text-dark">Newsletter Subscribers</h3>
                <p class="text-muted mb-0 small">Manage email subscribers and community audience list</p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <span class="badge bg-primary px-3 py-2 rounded-pill fs-6">
                    <i class="bi bi-people-fill me-1"></i> {{ $subscribers->total() }} Total Subscribers
                </span>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Subscribers Card & Table -->
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold fs-6">
                    <i class="bi bi-envelope-check-fill text-primary me-2"></i> Subscribed Email Records
                </h5>
                <small class="text-muted">Showing {{ $subscribers->firstItem() ?? 0 }} to {{ $subscribers->lastItem() ?? 0 }} of {{ $subscribers->total() }}</small>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="ps-4" style="width: 80px;">#</th>
                                <th>Subscriber Email</th>
                                <th>Status</th>
                                <th>Subscribed On</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subscribers as $index => $subscriber)
                                <tr>
                                    <td class="ps-4 text-muted fw-bold">{{ $subscribers->firstItem() + $index }}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center text-primary" 
                                                 style="width: 36px; height: 36px; background: rgba(63, 32, 127, 0.08); font-size: 1rem;">
                                                <i class="bi bi-envelope-fill"></i>
                                            </div>
                                            <div>
                                                <span class="fw-bold text-dark d-block">{{ $subscriber->email }}</span>
                                                <small class="text-muted">Verified contact</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1 rounded-pill">
                                            <i class="bi bi-check-circle me-1"></i> Active
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-muted small">
                                            <i class="bi bi-calendar-event me-1 text-primary"></i> {{ $subscriber->created_at->format('M d, Y') }} &bull; {{ $subscriber->created_at->format('h:i A') }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-5 text-muted">
                                        <i class="bi bi-inbox fs-1 d-block mb-2 text-muted"></i>
                                        No subscribers found yet.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($subscribers->hasPages())
                    <div class="p-3 border-top d-flex justify-content-center align-items-center">
                        {{ $subscribers->links('pagination::bootstrap-5') }}
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>