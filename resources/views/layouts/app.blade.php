<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100" style="font-family: 'Poppins', 'Montserrat', sans-serif;">
    <!-- Main Header with Logo and Title -->
    <div class="w-full bg-white shadow-[0_2px_4px_0_rgba(0,0,0,0.10)]">
        <!-- Logo and Company Name -->
        <div class="container mx-auto px-20 py-6">
            <div class="flex items-center">
                <div class="flex items-center">
                    <!-- Logo -->
                    <img src="/images/logo.png" alt="Logo" class="h-12 w-auto">
                    <div class="ml-4">
                        <div class="text-xs font-medium">AAAEP</div>
                        <div class="text-xs font-bold">CENTRE NATIONAL<br>DES TESTS PSYCHOTECHNIQUES</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Title Section with Shadow on top and bottom -->
    <div class="w-full bg-white shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.1),0_4px_6px_-1px_rgba(0,0,0,0.1)] relative">
        <div class="container mx-auto px-20 py-8">
            <h1 class="text-[28px] font-semibold text-[#36578A]">Test psychotechnique pour permis de conduire à Montgeron</h1>
        </div>
    </div>

    <main>
        @yield('content')
    </main>
</body>
</html>