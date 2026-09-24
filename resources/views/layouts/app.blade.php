<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --pale-sky: #CAE5FF;
            --frosted-blue: #ACEDFF;
            --baby-blue-ice: #89BBFE;
            --glaucous: #6F8AB7;
            --charcoal: #3D3A45; 
        }

        body {
            background-color: #f3f7fb !important;
            color: #2d3748;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .bg-custom-navbar {
            background: linear-gradient(135deg, var(--charcoal), #2B2832) !important;
        }

        .bg-custom-footer {
            background-color: var(--charcoal) !important;
        }

        .card-custom {
            background-color: #ffffff;
            border: none;
            box-shadow: 0 10px 25px rgba(111, 138, 183, 0.15);
            border-radius: 12px;
            overflow: hidden;
        }

        .card-header-custom {
            background: linear-gradient(135deg, var(--glaucous), var(--baby-blue-ice)) !important;
            color: #ffffff !important;
            padding: 1.25rem;
            border: none;
        }

        .btn-custom-primary {
            background: linear-gradient(135deg, var(--baby-blue-ice), var(--glaucous)) !important;
            color: #ffffff !important;
            border: none;
            font-weight: 600;
            border-radius: 8px;
            padding: 0.6rem 1.2rem;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Komponen Navbar --}}
    @include('components.navbar')

    {{-- Konten Utama --}}
    <main class="container my-5 flex-grow-1">
        @yield('content')
    </main>

    {{-- Komponen Footer --}}
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>