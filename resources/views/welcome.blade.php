<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    {{-- @livewire('users-table') --}}
    <livewire:users-table />


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
</body>

</html>
