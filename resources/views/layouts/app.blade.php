<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bimbo Ilorin Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.png') }}" />

    <!-- ✅ Include Livewire Styles - Ensure No Duplicate -->
    @livewireStyles
</head>

<body>
    <div class="container-scroller">
        <!-- Navbar -->
        @include('SuperAdmin.partials.navbar')

        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar -->
            @include('SuperAdmin.partials.sidebar')

            <!-- Main Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    {{ $slot }}
                </div>
                <!-- Footer -->
                @include('SuperAdmin.partials.footer')
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

    <!-- ✅ Include Livewire Scripts - Ensure No Duplicate -->
    @livewireScripts

    <!-- ✅ Include Alpine.js - Make sure it's not duplicated -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
