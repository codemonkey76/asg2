<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

</head>
<body class="font-sans antialiased">
<x-jet-banner />

<div class="min-h-screen dark:bg-gray-900 bg-gray-100">

<!-- Page Content -->
    <main>
        <div class="h-screen flex overflow-hidden dark:bg-gray-900 bg-gray-100">
            @livewire('mobile-sidebar')
            @livewire('sidebar')
            <div class="flex-1 overflow-auto focus:outline-none">
                <div class="relative z-10 flex-shrink-0 flex h-16 dark:bg-gray-900 bg-white border-b dark:border-gray-600 border-gray-200 lg:border-none">
                    @livewire('sidebar-button')
                    <!-- Search bar -->
                    <div class="flex-1 px-4 flex justify-between sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                        <x-search-form></x-search-form>
                        <div class="ml-4 flex items-center md:ml-6">
                            <x-notification-button />


                            <!-- Profile dropdown -->
                            @livewire('profile-dropdown')
                        </div>
                    </div>
                </div>
                <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </main>
</div>

@stack('modals')

@livewireScripts
</body>
</html>
