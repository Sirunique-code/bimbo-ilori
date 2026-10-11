<footer class="footer">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 text-center text-md-start">
        <!-- Copyright -->
        <div class="footer-copyright small text-muted">
            &copy; {{ now()->year }} <strong class="text-dark">Bimbo Ilori Programs</strong>. All rights reserved.
        </div>

        <!-- Status & Date Indicator -->
        <div class="footer-status d-flex flex-wrap align-items-center justify-content-center gap-2 my-1 my-md-0">
            <span class="badge bg-light text-muted border px-2 py-1 small d-inline-flex align-items-center gap-1 text-nowrap">
                <span class="pulse-dot"></span>
                <i class="bi bi-shield-check text-success"></i> Secure Control Center
            </span>
            <span class="badge bg-light text-muted border px-2 py-1 small d-inline-flex align-items-center gap-1 text-nowrap">
                @livewire('superadmin.current-date')
            </span>
        </div>

        <!-- Designer Credit -->
        <div class="footer-credit small text-muted">
            Designed by: <a href="https://sites.google.com/view/thaddeaus-samuel/home" target="_blank" class="text-primary text-decoration-none fw-semibold">Unique Creative Notion</a>
        </div>
    </div>
</footer>

