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
    {{-- @livewire('navbar', ['navbarItems' => [
        'home',
        ['name' => 'Users', 'url' => route('users.index')],
    ]]) --}}



    <main class="flex">
        <!-- Sidebar -->
        <div class="pr-4 bg-base-200">
            @livewire('sidebar', ['sections' => [
                [
                    'title' => 'Services',
                    'links' => [
                        ['name' => 'Branding', 'url' => route('placeholder')],
                        ['name' => 'Design', 'url' => route('placeholder')],
                        ['name' => 'Marketing', 'url' => route('placeholder')],
                        ['name' => 'Advertisement', 'url' => route('placeholder')],
                    ],
                ],
            ]])
        </div>

        <!-- Main Content Area -->
        <div class="flex-1">
            {{-- Yield for page content --}}
            @yield('content')
        </div>
    </main>


    
    @livewire('footer', [
        'footer1' => true,
        'footer2' => true,
        'sections' => [
            [
                'title' => 'Services',
                'links' => [
                    ['name' => 'Branding', 'url' => route('placeholder')],
                    ['name' => 'Design', 'url' => route('placeholder')],
                    ['name' => 'Marketing', 'url' => route('placeholder')],
                    ['name' => 'Advertisement', 'url' => route('placeholder')],
                ],
            ],
            [
                'title' => 'Company',
                'links' => [
                    ['name' => 'About us', 'url' => route('placeholder')],
                    ['name' => 'Contact', 'url' => route('placeholder')],
                    ['name' => 'Jobs', 'url' => route('placeholder')],
                    ['name' => 'Press kit', 'url' => route('placeholder')],
                ],
            ],
            [
                'title' => 'Legal',
                'links' => [
                    ['name' => 'Terms of use', 'url' => route('placeholder')],
                    ['name' => 'Privacy policy', 'url' => route('placeholder')],
                    ['name' => 'Cookie policy', 'url' => route('placeholder')],
                ],
            ],
        ],
    ])    



    @livewireScripts
    @livewireStyles

</body>

</html>
