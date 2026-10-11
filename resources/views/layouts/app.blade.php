<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bimbo Ilori | Superadmin Control Center</title>

    <!-- Google Web Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/ti-icons/css/themify-icons.css') }}">
    
    <!-- Base Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/base/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">

    <!-- ✅ Bimbo Ilori Modern Admin Design System -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/modern-admin.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" />

    <!-- ✅ Include Livewire Styles -->
    @livewireStyles
</head>

<body>
    <div class="container-scroller">
        <!-- Navbar -->
        @include('superadmin.partials.navbar')

        <!-- Mobile Drawer Backdrop -->
        <div class="sidebar-backdrop" id="sidebarBackdrop"></div>

        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar -->
            @include('superadmin.partials.sidebar')

            <!-- Main Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    {{ $slot }}
                </div>
                <!-- Footer -->
                @include('superadmin.partials.footer')
            </div>
        </div>
    </div>

    <!-- Plugins: JS -->
    <script src="{{ asset('assets/admin/vendors/base/vendor.bundle.base.js') }}"></script>

    <!-- Plugin JS for this page -->
    <script src="{{ asset('assets/admin/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.cookie.js') }}" type="text/javascript"></script>

    <!-- inject:js -->
    <script src="{{ asset('assets/admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/admin/js/template.js') }}"></script>
    <script src="{{ asset('assets/admin/js/todolist.js') }}"></script>

    <!-- Custom JS for this page -->
    <script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>

    <!-- Mobile Drawer Tap-Outside Handler -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglers = document.querySelectorAll('[data-toggle="offcanvas"]');
            const sidebar = document.querySelector('.sidebar-offcanvas');
            const backdrop = document.getElementById('sidebarBackdrop');

            if (sidebar && backdrop) {
                togglers.forEach(btn => {
                    btn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        backdrop.classList.toggle('show');
                    });
                });

                backdrop.addEventListener('click', function() {
                    sidebar.classList.remove('active');
                    backdrop.classList.remove('show');
                });
            }
        });
    </script>

    <!-- ✅ Include Livewire Scripts -->
    @livewireScripts

    <!-- ✅ Include Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
