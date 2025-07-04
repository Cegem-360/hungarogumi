<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ config('app.name') }}</title>

    {{-- add fontawesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        crossorigin="anonymous">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite('resources/js/app.js')

</head>

<body class="antialiased bg-gray-200">

    {{ $slot }}

    @livewire('notifications')

    @filamentScripts

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/solid.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
