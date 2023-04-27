<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('styles')
    <title>TecGram - @yield('title')</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-300">

    @auth
        @include('layouts.Feed')
    @endauth
    @guest
        @include('layouts.Menu') {{-- TODO Para meter el contenido de un archivo sin section o extends, es @include --}}
    @endguest

    <main class="container mx-auto mt-10">
        <h1 class="font-black text-center text-2xl mb-10">@yield('title')</h1> {{-- ? Para inyectar codigo de una section o de un extends es con yield --}}
        @yield('content')
    </main>

    <footer class="mt-4 text-center text-gray-900 font-extrabold p-5 text-xs">
        TecGram - All rights reserved - {{ now()->year }}
    </footer>
</body>

</html>
