<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Admin Login | Bimbo Ilori Control Center' }}</title>

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

    <!-- Bimbo Ilori Modern Admin Design System -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/modern-admin.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

    @livewireStyles
</head>
<body class="auth-body">
    <main>
        {{ $slot }}
    </main>

    <!-- Base JS -->
    <script src="{{ asset('assets/admin/vendors/base/vendor.bundle.base.js') }}"></script>
    
    @livewireScripts
</body>
</html>
