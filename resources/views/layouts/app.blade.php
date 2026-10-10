<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bimbo Ilori SuperAdmin Panel</title>
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Themify Icons & Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/base/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <!-- Template & Admin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" />

    <style>
        body {
            font-family: 'Outfit', sans-serif !important;
            background-color: #f4f6fc !important;
            color: #2b2b2b;
        }
        
        .navbar {
            box-shadow: 0 4px 15px rgba(0,0,0,0.04) !important;
            background: #ffffff !important;
        }

        .sidebar {
            background: #1a1528 !important;
            box-shadow: 4px 0 15px rgba(0,0,0,0.03);
        }

        .sidebar .nav .nav-item .nav-link {
            color: #b0a8c9 !important;
            font-weight: 500;
            border-radius: 8px;
            margin: 2px 10px;
            padding: 12px 15px;
            transition: all 0.25s ease;
        }

        .sidebar .nav .nav-item .nav-link:hover,
        .sidebar .nav .nav-item.active > .nav-link {
            color: #ffffff !important;
            background: linear-gradient(135deg, #3F207F 0%, #2b1559 100%) !important;
            box-shadow: 0 4px 12px rgba(63, 32, 127, 0.3);
        }

        .sidebar .nav .nav-item .nav-link .menu-icon {
            color: #E4B548 !important;
            font-size: 1.1rem;
        }

        .card {
            border: none !important;
            border-radius: 14px !important;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.04) !important;
            background: #ffffff;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(63, 32, 127, 0.1) !important;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3F207F 0%, #2b1559 100%) !important;
            border: none !important;
            box-shadow: 0 4px 12px rgba(63, 32, 127, 0.25) !important;
            border-radius: 8px !important;
            padding: 10px 20px !important;
            font-weight: 600;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #2b1559 0%, #1c0d3a 100%) !important;
            box-shadow: 0 6px 16px rgba(63, 32, 127, 0.35) !important;
        }

        .btn-warning {
            background: #E4B548 !important;
            color: #1a1528 !important;
            border: none !important;
            font-weight: 600;
        }

        .table-responsive {
            border-radius: 12px;
            overflow: hidden;
        }

        .table thead th {
            background-color: #f8f7fc !important;
            color: #3F207F !important;
            font-weight: 700 !important;
            border-bottom: 2px solid #e9e6f5 !important;
            text-transform: uppercase;
            font-size: 0.78rem;
            letter-spacing: 0.5px;
        }

        .table tbody tr {
            transition: background-color 0.2s ease;
        }

        .table tbody tr:hover {
            background-color: #fdfbff !important;
        }

        .badge-purple {
            background-color: rgba(63, 32, 127, 0.12);
            color: #3F207F;
            font-weight: 600;
        }
    </style>

    @livewireStyles
</head>

<body>
    <div class="container-scroller">
        <!-- Navbar -->
        @include('Superadmin.partials.navbar')

        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar -->
            @include('Superadmin.partials.sidebar')

            <!-- Main Content -->
            <div class="main-panel">
                <div class="content-wrapper p-4">
                    {{ $slot }}
                </div>
                <!-- Footer -->
                @include('Superadmin.partials.footer')
            </div>
        </div>
    </div>

    <!-- Plugins: JS -->
    <script src="{{ asset('assets/admin/vendors/base/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/admin/js/template.js') }}"></script>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
