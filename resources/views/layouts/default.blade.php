<!DOCTYPE html>
<html data-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="mx-auto bg-base-100">
    {{-- INCLUDES FOR COMPONENTS --}}

    {{-- @include('components.header') --}}
    @livewire('navbar', ['navbarItems' => [
    'home',
        ['name' => 'Users', 'url' => route('users.index')],
    ]])

    <main class="py-4 mx-[10%]">
        {{-- YIELD FOR CONTENT --}}
        @yield('content')
    </main>

    
    @livewire('footer', ['sections' => [
        [
        'title' => 'Services',
        'links' => [
            ['name' => 'Branding'],  // Custom URL
            ['name' => 'Design', 'url' => route('home')],  // Defaults to route('design') if no 'url' is provided
            ['name' => 'Marketing', 'url' => route('home')],
            ['name' => 'Advertisement', 'url' => route('home')],
            ],
        ],
        [
            'title' => 'Company',
            'links' => [
                ['name' => 'About us', 'url' => route('home')],
                ['name' => 'Contact', 'url' => route('home')],
                ['name' => 'Jobs', 'url' => route('home')],
                ['name' => 'Press kit', 'url' => route('home')],
            ],
        ],
        [
            'title' => 'Legal',
            'links' => [
                ['name' => 'Terms of use', 'url' => route('home')],
                ['name' => 'Privacy policy', 'url' => route('home')],
                ['name' => 'Cookie policy', 'url' => route('home')],
            ],
        ],
    ]])    


    @livewireScripts
    @livewireStyles

</body>

</html>
