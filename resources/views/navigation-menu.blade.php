<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="nav-left" class="flex items-center">
        <a href="{{ route('home') }}">
            <x-application-mark />
        </a>
    </div>
    <div class="flex-1 flex justify-center">
        <div class="top-menu">
            <div class="flex space-x-4">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Inicio') }}
                </x-nav-link>
                <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                    {{ __('Nuestros Cursos') }}
                </x-nav-link>
                <x-nav-link href="{{ route('aboutus') }}" :active="request()->routeIs('aboutus')">
                    {{ __('Sobre Nosotros') }}
                </x-nav-link>
                <x-nav-link href="{{ route('calendar') }}" :active="request()->routeIs('calendar')">
                    {{ __('Calendario de Cursos') }}
                </x-nav-link>
            </div>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-6">
        @auth
            @include('layouts.partials.header-right-auth')
        @else
            @include('layouts.partials.header-right-guest')
        @endauth
    </div>
</nav>