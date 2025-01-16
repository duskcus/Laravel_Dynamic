<!DOCTYPE html>
<html data-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="mx-auto bg-base-100">
    {{-- INCLUDES FOR COMPONENTS --}}

    {{-- @include('components.header') --}}
    @livewire('navbar', ['navbarItems' => [
        'home',
        ['name' => 'GitHub', 'url' => "https://github.com/duskcus/Laravel_Dynamic"],
    ]])


    <main class="flex">
        <!-- Sidebar -->
        <div class="bg-base-200">
            @livewire('sidebar', ['sections' => [
                [
                    'title' => 'Basic',
                    'links' => [
                        ['name' => 'Table', 'url' => route('users.index'), 'icon' => 'fa fa-table'],
                        ['name' => 'Api Table', 'url' => route('api'), 'icon' => 'fa fa-cogs'],
                        ['name' => 'Modal Form', 'url' => route('form'), 'icon' => 'fa fa-edit'],
                    ],
                ],
                [
                    'title' => 'Utility',
                    'links' => [
                        // ['name' => 'Search Bar', 'url' => route('placeholder'), 'icon' => 'fa fa-search'],
                        // ['name' => 'Filters', 'url' => route('placeholder'), 'icon' => 'fa fa-filter'],
                        // ['name' => 'Themes', 'url' => route('placeholder'), 'icon' => 'fa fa-palette'],
                        ['name' => 'Toast', 'url' => route('placeholder'), 'icon' => 'fa fa-bell'],
                        ['name' => 'Loader', 'url' => route('placeholder'), 'icon' => 'fa fa-spinner'],
                        ['name' => 'Pop-up', 'url' => route('placeholder'), 'icon' => 'fa fa-window-restore'],
                    ],
                ],
                [
                    'title' => 'Security',
                    'links' => [
                        ['name' => 'Stepper', 'url' => route('placeholder'), 'icon' => 'fa fa-stairs'],
                        // ['name' => 'Authentication', 'url' => route('placeholder'), 'icon' => 'fa fa-lock'],
                        // ['name' => 'Authorization', 'url' => route('placeholder'), 'icon' => 'fa fa-shield-alt'],
                    ],
                ],
                // [
                //     'title' => 'Extra',
                //     'links' => [
                //         ['name' => 'Payment', 'url' => route('placeholder'), 'icon' => 'fa fa-spinner'],
                //         ['name' => 'Invoices', 'url' => route('placeholder'), 'icon' => 'fa fa-lock'],
                //         ['name' => 'Orders', 'url' => route('placeholder'), 'icon' => 'fa fa-shield-alt'],
                //     ],
                // ],
            ]])
        </div>

        <!-- Main Content Area -->
        <div class="flex-1 min-h-screen">
            {{-- Yield for page content --}}
            @yield('content')
        </div>
    </main>

    
    @livewire('footer', [
        'footer1' => true,
        'footer2' => true,
        'sections' => [
            [
                'title' => 'Basic',
                'links' => [
                    ['name' => 'Table', 'url' => route('users.index'), 'icon' => 'fa fa-table'],
                    ['name' => 'Api Table', 'url' => route('api'), 'icon' => 'fa fa-cogs'],
                    ['name' => 'Modal Form', 'url' => route('form'), 'icon' => 'fa fa-edit'],
                ],
            ],
            [
                'title' => 'Utility',
                'links' => [
                    // ['name' => 'Search Bar', 'url' => route('placeholder'), 'icon' => 'fa fa-search'],
                    // ['name' => 'Filters', 'url' => route('placeholder'), 'icon' => 'fa fa-filter'],
                    // ['name' => 'Themes', 'url' => route('placeholder'), 'icon' => 'fa fa-palette'],
                    ['name' => 'Toast', 'url' => route('placeholder'), 'icon' => 'fa fa-bell'],
                    ['name' => 'Loader', 'url' => route('placeholder'), 'icon' => 'fa fa-spinner'],
                    ['name' => 'Pop-up', 'url' => route('placeholder'), 'icon' => 'fa fa-window-restore'],
                ],
            ],
            [
                'title' => 'Security',
                'links' => [
                    ['name' => 'Stepper', 'url' => route('placeholder'), 'icon' => 'fa fa-stairs'],
                    // ['name' => 'Authentication', 'url' => route('placeholder'), 'icon' => 'fa fa-lock'],
                    // ['name' => 'Authorization', 'url' => route('placeholder'), 'icon' => 'fa fa-shield-alt'],
                ],
            ],
            // [
            //     'title' => 'Extra',
            //     'links' => [
            //         ['name' => 'Payment', 'url' => route('placeholder'), 'icon' => 'fa fa-spinner'],
            //         ['name' => 'Invoices', 'url' => route('placeholder'), 'icon' => 'fa fa-lock'],
            //         ['name' => 'Orders', 'url' => route('placeholder'), 'icon' => 'fa fa-shield-alt'],
            //     ],
            // ],
        ],
    ])    


    @livewireScripts
    @livewireStyles

</body>

</html>
