<div>
    <nav class="p-4 shadow-md bg-base-300">
        <div class="flex items-center justify-between mx-auto max-w-7xl">
            <!-- Logo -->
            <div class="flex items-center flex-shrink-0 mr-6 text-white hover:text-gray-300">
                <!-- Logo Image -->
                <a href="#" class="ml-2 mr-6 text-xl font-semibold">Logo</a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:block">
                @foreach($navbarItems as $item)
                    <a href="{{ $item['url'] }}"
                        class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
                        {{ request()->url() == $item['url'] ? 'text-primary' : 'hover:opacity-75' }}">
                        {{ $item['name'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </nav>
</div>
