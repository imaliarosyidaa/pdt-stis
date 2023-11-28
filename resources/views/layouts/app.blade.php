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

        <!-- Icons -->
        <link rel="shortcut icon" type="image/png" href="{{ asset('/images/logos/favicon.png') }}" />
        
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('/css/styles.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('/css/custom.css') }}"/>
        <link rel="stylesheet" href="../admin.assets/css/form.css">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            @include('components.dashboard.sidebar')

            <!-- Page Content -->
            <main>
                @if (isset($slot))
                    {{ $slot }}
                @else
                    @yield('content')
                @endif
            </main>
        </div>

        <!-- JS -->
        <script src="{{asset ('/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{asset ('/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{asset ('/js/sidebarmenu.js') }}"></script>
        <script src="{{asset ('/js/app.min.js') }}"></script>
        <script src="{{asset ('/libs/simplebar/dist/simplebar.js') }}"></script>
    </body>
</html>
