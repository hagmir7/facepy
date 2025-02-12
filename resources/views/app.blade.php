<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ (isset($title) ? $title . ' | ' : '') . config('app.name', 'Facepy') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
   <x-navigation />
    @yield('content')

    <x-footer />

    @livewireScriptConfig
</body>
</html>
