<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Leaflet CSS & JS (Untuk Peta) -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <!-- Vite untuk menghubungkan file CSS & JS lokal -->
    @vite(['resources/js/app.js'])

    @stack('scripts')
</head>
<body class="bg-gray-100 bg-cover bg-center bg-fixed">

    <div class="container mx-auto p-4">
        @yield('content')
    </div>

</body>
</html>
