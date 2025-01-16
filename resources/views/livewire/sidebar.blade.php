<div>
    <!-- Sidebar -->
    <div class="hidden py-4 pl-4 pr-8 space-y-4 bg-base-200 rounded-box lg:block">
        @foreach($sections as $section)
            <!-- Section Title -->
            <ul class="w-full menu bg-base-200 rounded-box">
                <li class="menu-title">
                    <h6 class="text-lg font-bold">{{ $section['title'] }}</h6>
                </li>

                <!-- Section Links -->
                @foreach($section['links'] as $link)
                    @php
                        // Default the URL to the route name if no URL is provided
                        $url = isset($link['url']) ? $link['url'] : route($link['name']);
                        $icon = isset($link['icon']) ? $link['icon'] : ''; // Fetch the icon if available
                    @endphp
                    <li>
                        <a href="{{ $url }}"
                           class="link no-underline block mt-2 {{ request()->url() == $url ? 'text-primary' : 'hover:opacity-75' }}">
                           
                           <!-- Render icon if exists -->
                           @if($icon)
                               <i class="mr-2 {{ $icon }}"></i>
                           @endif
                           
                           {{ $link['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endforeach
    </div>
</div>
