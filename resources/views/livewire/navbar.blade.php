<div class="drawer drawer-end">
    <!-- Drawer toggle checkbox -->
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />

    <!-- Page content, including the navbar -->
    <div class="drawer-content">
        <nav class="py-4 shadow-md bg-base-300">
            <div class="flex items-center justify-between mx-auto w-[80%]">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0 text-white hover:text-gray-300">
                    <!-- Logo Image -->
                    <span href="{{ route('home') }}" class="text-xl font-semibold">Logo</span>
                </div>

                <!-- Navigation Links for Desktop -->
                <div class="hidden lg:block">
                    @foreach ($navbarItems as $item)
                        @if (is_array($item))
                            <!-- If it's an array with 'name' and 'url' -->
                            <a href="{{ $item['url'] }}"
                                class="link no-underline block mt-4 lg:inline-block lg:mt-0 {{ $loop->last ? '' : 'mr-4' }}
                                {{ request()->url() == $item['url'] ? 'text-primary' : 'hover:opacity-75' }}">
                                {{ $item['name'] }}
                            </a>
                        @else
                            <!-- If it's a string (route name) -->
                            <a href="{{ route($item) }}"
                                class="link no-underline block mt-4 lg:inline-block lg:mt-0 {{ $loop->last ? '' : 'mr-4' }}
                                {{ request()->url() == route($item) ? 'text-primary' : 'hover:opacity-75' }}">
                                {{ ucwords($item) }}
                            </a>
                        @endif
                    @endforeach
                </div>

                <!-- Mobile Drawer Button -->
                <div class="lg:hidden">
                    <label for="my-drawer-4" class="drawer-button btn btn-primary">Menu</label>
                </div>
            </div>
        </nav>
    </div>

    <!-- Drawer Side (Sidebar) -->
    <div class="z-10 drawer-side lg:hidden">
        <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="min-h-full p-4 menu bg-base-200 text-base-content w-80">
            <!-- Sidebar content, Navigation for Mobile -->
            @foreach ($navbarItems as $item)
                @if (is_array($item))
                    <!-- If it's an array with 'name' and 'url' -->
                    <li><a href="{{ $item['url'] }}"
                            class="block mt-4 lg:inline-block lg:mt-0 {{ request()->url() == $item['url'] ? 'text-primary' : 'hover:opacity-75' }}">
                            {{ $item['name'] }}
                        </a></li>
                @else
                    <!-- If it's a string (route name) -->
                    <li><a href="{{ route($item) }}"
                            class="block mt-4 lg:inline-block lg:mt-0 {{ request()->url() == route($item) ? 'text-primary' : 'hover:opacity-75' }}">
                            {{ ucwords($item) }}
                        </a></li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
