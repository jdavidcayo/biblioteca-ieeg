<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
        @livewireStyles
    </head>
    <body class="min-h-screen overflow-hidden loginImage">
        <div class="p-4 flex items-center justify-between">
            <a href="/">
                <img src="{{ asset('assets/img/Logo-IEEG.png') }}" alt="Logo Instituto" class="w-40">
            </a>
                
                <div class="ml-4 text-crema font-gothamBold text-2xl flex flex-col items-end">
                    <p class="">Biblioteca Digital del</p>
                    <p class="">Régimen Especial Sancionador</p>
            </div>
        </div>
        

            <div class="font-gotham text-base text-crema antialiased flex flex-col items-center p-2 sm:pt-0 md:pt-2 lg:pt-4 sm:mt-0 md:mt-2 lg:mt-4">
                {{ $slot }}
            </div>
            @livewireScripts
    </body>
</html>
