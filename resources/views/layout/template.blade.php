<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    @livewireStyles
</head>

<body class="bg-gray-100">
    <div class="flex">
        @include('layout.sidebar')

        <!-- Main Content -->
        <div class="flex-1">
            @include('layout.navbar')

            <div class="p-6 grid grid-cols-1 gap-6">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    @livewireScripts
</body>

</html>
