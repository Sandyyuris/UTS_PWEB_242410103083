<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWEB - @yield('title', 'Beranda')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-teal {
            background-color: #004d40 !important;
        }
        .text-teal {
            color: #004d40 !important;
        }
        .bg-cream {
            background-color: #f7f3e9 !important;
        }
        .btn-teal {
            background-color: #004d40;
            border-color: #004d40;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-teal:hover {
            background-color: #00897b;
            border-color: #00897b;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 77, 64, 0.4);
        }
        .text-gold {
            color: #ffd700 !important;
        }
        .shadow-premium {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        }
    </style>
</head>
<body class="bg-cream">

    <x-navbar />

    <main class="container mt-5 py-4 min-vh-100">
        @yield('content')
    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
