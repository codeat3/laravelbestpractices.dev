<nav
    class="top-0 left-0 z-0 flex items-center justify-center w-full h-full py-5 -ml-0 space-x-5 text-base md:-ml-5 md:py-0 md:absolute">
    <x-nav-a href="{{ route('home') }}" :active="request()->routeIs('home')">
        Home
    </x-nav-a>
    <x-nav-a href="{{ route('about') }}" :active="request()->routeIs('about')">
        About
    </x-nav-a>
</nav>
