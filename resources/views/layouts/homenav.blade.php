<nav class="sticky top-0 bg-white border-b-2 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-5 w-auto fill-current text-gray-800" />
                </a>
            </div>

            <!-- Regular Menu (Hidden on small screens) -->
            <div class="hidden lg:flex space-x-8">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="flex items-center font-bold text-md text-red-500 hover:border-b-4 border-red-500">
                    {{ __('Home') }}
                </x-nav-link>
                <a href="/home" class="flex items-center font-bold text-md text-red-500 hover:border-b-4 border-red-500">Shop</a>
                <a href="/home" class="flex items-center font-bold text-md text-red-500 hover:border-b-4 border-red-500">Catalog</a>
                <a href="/home" class="flex items-center font-bold text-md text-red-500 hover:border-b-4 border-red-500">Bright Stories</a>
                <a href="/home" class="flex items-center font-bold text-md text-red-500 hover:border-b-4 border-red-500">About us</a>
                <a href="/home" class="flex items-center font-bold text-md text-red-500 hover:border-b-4 border-red-500">Contact us</a>
                <div class="flex space-x-5 items-center">
                    <input type="text" placeholder="search..." class="rounded-2xl text-red-500">
                    <i class="fa-solid fa-cart-shopping text-lg text-red-500"></i>
                    <i class="fa-solid fa-user text-lg text-red-500"></i>
                </div>
            </div>

            <!-- Hamburger Menu Button (Visible on small screens) -->
            <div class="lg:hidden flex items-center">
                <button id="hamburgerBtn" class="text-red-500 focus:outline-none text-2xl">
                    <i id="hamburgerIcon" class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Dropdown Menu (Hidden by default, shown on click) -->
    <div id="mobileMenu" class="hidden lg:hidden absolute right-0 top-16 bg-white w-1/2 border-t-2 border-red-500 shadow-lg rounded-b-lg">
        <ul class="flex flex-col p-4">
            <li><a href="{{ route('home') }}" class="block py-2 font-bold text-md text-red-500 hover:bg-red-100">Home</a></li>
            <li><a href="/home" class="block py-2 font-bold text-md text-red-500 hover:bg-red-100">Shop</a></li>
            <li><a href="/home" class="block py-2 font-bold text-md text-red-500 hover:bg-red-100">Catalog</a></li>
            <li><a href="/home" class="block py-2 font-bold text-md text-red-500 hover:bg-red-100">Bright Stories</a></li>
            <li><a href="/home" class="block py-2 font-bold text-md text-red-500 hover:bg-red-100">About us</a></li>
            <li><a href="/home" class="block py-2 font-bold text-md text-red-500 hover:bg-red-100">Contact us</a></li>
            <li class="mt-4">
                <input type="text" placeholder="search..." class="w-full rounded-2xl text-red-500 p-2">
            </li>
            <li class="flex justify-between mt-4">
                <i class="fa-solid fa-cart-shopping text-lg text-red-500"></i>
                <i class="fa-solid fa-user text-lg text-red-500"></i>
            </li>
        </ul>
    </div>
</nav>
