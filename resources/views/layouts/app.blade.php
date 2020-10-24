<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SHMS') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
        <link href="{{ asset('dist-assets/css/themes/lite-purple.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('dist-assets/css/plugins/perfect-scrollbar.min.css') }}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <div class="app-admin-wrap layout-sidebar-large">

                @livewire('navigation-dropdown')
                @include('includes.sidebar')
            <!-- Page Heading -->


            <!-- Page Content -->
            <main>
                <div class="main-content-wrap sidenav-open d-flex flex-column" style="margin-top: 0px;">
                    <!-- ============ Body content start ============= -->
                    <div class="main-content">
                        {{ $slot }}

                        @include('includes.footer')
                    </div>
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        @include('includes.scripts')
    </body>
</html>
