<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.include.header')

            @include('layouts.include.sidebar')

            <!-- Page Content -->
            <main class="page-content">
                {{ $slot }}
            </main>
        </div>

        <script>
            $(function() {
                let isOpen = false;

                $('.user-setting').on('click', function () {
                    $('.dropdown-menu').toggleClass("block");
                });
    
                $('.mobile-toggle-icon').on('click', function () {
                    toggleElementsMenu();
                    
                    if ($('.menu-group').hasClass('open')) {
                        $('.menu-group.open > .menu-parent').addClass('bg-slate-600');
                        $('.menu-group').removeClass('open');
                        isOpen = true;
                    } else if (isOpen) {
                        $('.menu-group > .menu-parent').removeClass('bg-slate-600');
                        $('.menu-group').addClass('open');
                        isOpen = false;
                    }
                });
    
                $('.menu-parent').on('click', function () {
                    const group = $(this).closest('.menu-group');
                    group.toggleClass('open');

                    if (isOpen) {
                        toggleElementsMenu();
                    }
                });

                function toggleElementsMenu() {
                    $('.sidebar').toggleClass('left-0 xl:w-[70px]');
                    $('.top-header').toggleClass('left-0 xl:left-[70px]');
                    $('.page-content').toggleClass('xl:ml-[70px]');
                    $('.menu-title, .menu-label, .sidebar-title').toggleClass('hidden');
                    $('.menu-parent').toggleClass('has-arrow');
                    $('.menu-parent, .menu-link').toggleClass('justify-center !border-l-0');
                }

                $('#logoutbtn').on('click', function() {
                    $('#logoutform').submit();
                });
            })
        </script>
    </body>
</html>
