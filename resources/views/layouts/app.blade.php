<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="min-h-screen flex flex-col">
            <!-- Navbar -->
            <nav class="bg-white shadow-md">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <a href="{{ route('landingpage') }}" class="text-xl font-semibold text-gray-700">
                                <!-- {{ config('app.name', 'Laravel') }} -->
                                  Actividad 9
                            </a>
                        </div>

                        <div class="hidden sm:flex sm:items-center space-x-4">
                            @guest
                                <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900 font-semibold">
                                    Login
                                </a>
                                <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900 font-semibold">
                                    Register
                                </a>
                            @else
                                <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-gray-900 font-semibold">
                                    Dashboard
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="text-gray-700 hover:text-gray-900 font-semibold">
                                        Logout
                                    </button>
                                </form>
                            @endguest
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="flex-grow">
                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 w-full">
                    @yield('content')
                </div>
            </main>

        </div>
    </body>
</html>
