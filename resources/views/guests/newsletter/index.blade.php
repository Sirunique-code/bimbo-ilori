<x-guest-layout>
    <!-- Header Banner -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header" style="background-color: #3F207F !important;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-4 text-white animated slideInDown mb-3">Newsletter Subscribers</h1>
                    <p class="text-white-50 fs-5 mb-0">List of all emails subscribed to Bimbo Ilori updates</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                        <div class="card-header bg-white p-4 d-flex justify-content-between align-items-center border-bottom">
                            <div>
                                <h4 class="fw-bold mb-0 text-dark" style="color: #3F207F !important;">
                                    <i class="fa fa-envelope me-2"></i> Subscribed Emails
                                </h4>
                                <small class="text-muted">Total Subscribers: {{ $subscribers->total() }}</small>
                            </div>
                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold">Active List</span>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-4">#</th>
                                            <th>Email Address</th>
                                            <th>Subscribed Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($subscribers as $index => $subscriber)
                                            <tr>
                                                <td class="ps-4 text-muted fw-bold">{{ $subscribers->firstItem() + $index }}</td>
                                                <td>
                                                    <span class="fw-semibold text-dark">{{ $subscriber->email }}</span>
                                                </td>
                                                <td class="text-muted">
                                                    <i class="far fa-calendar-alt me-1"></i> {{ $subscriber->created_at->format('M d, Y • h:i A') }}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="text-center py-5 text-muted">
                                                    No subscribers found yet.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer bg-white p-4 d-flex justify-content-center">
                            {{ $subscribers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>