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

    <!-- Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <livewire:styles />
</head>

<body class="font-sans antialiased">
    @include('layouts.navigation')

    @if (isset($banner))
    <!-- Page Banner -->
    <header class="flex align-middle justify-center pt-16 bg-gradient-to-tr from-slate-800 to-slate-900">
        <x-banner-logo class="w-full" color="#1e293b" />
    </header>
    @endif

    @if (isset($header))
    <!-- Page Heading -->
    <header class="pt-32 pb-8 bg-gradient-to-tr from-slate-800 to-slate-900">
        <h2 class="font-black text-5xl text-gray-600  text-center leading-tight">
            {{ $header }}
        </h2>
    </header>
    @endif


    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <livewire:scripts />
</body>

</html>