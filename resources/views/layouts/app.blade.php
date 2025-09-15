<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <a href="/" class="text-xl font-bold text-gray-800">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <div class="space-x-4">
                    <a href="{{ route('complete-reservation') }}" class="text-gray-600 hover:text-gray-900">Réservation</a>
                    <a href="{{ route('payment') }}" class="text-gray-600 hover:text-gray-900">Paiement</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-white shadow-sm mt-8">
        <div class="container mx-auto px-4 py-6">
            <div class="text-center text-gray-600">
                © {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Tous droits réservés.
            </div>
        </div>
    </footer>
</body>
</html>
