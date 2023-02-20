<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <title>{{ config('app.name') }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Maison de l'Adolescent de Besançon">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#FFFFFF">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#FFFFFF">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#FFFFFF">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Fonts GDPR friendly -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <script defer data-domain="project-mda.vinvui.com" src="https://plausible.io/js/script.js"></script>
</head>
<body>

    @if(request()->routeIs('homepage') || request()->routeIs('seminars.list'))
    <header class="bg-purple-50">
        @include('homepage.contact-header')
        @include('homepage.navigation')
    </header>
    @endif

    {{ $slot }}

    @livewireScripts
</body>
</html>
