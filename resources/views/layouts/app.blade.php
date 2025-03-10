<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    @stack('scripts')
    @vite(['resources/js/app.js'])
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) Menggunakan Tailwind -->
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        @yield('content')
    </div>
</form>
</body>
</html>

