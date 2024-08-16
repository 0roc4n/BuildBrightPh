<nav class="sticky top-0 bg-white border-b-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class=" hidden shrink-0 sm:flex items-center mb-3">
                    <a href="{{ route('dashboard') }}" class="ml-3">
                        <x-application-logo class="block h-5 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-20 sm:flex">
                   <a href="/home" class="flex items-center font-bold text-md text-red-500 hover:border-b-4 border-red-500">Home</a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-8 sm:flex">
                    <a href="/home" class="flex items-center font-bold text-md text-red-500 hover:border-b-4 border-red-500">Shop</a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-8 sm:flex">
                    <a href="/home" class="flex items-center font-bold text-md text-red-500 hover:border-b-4 border-red-500">Catalog</a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-8 sm:flex">
                    <a href="/home" class="flex items-center font-bold text-md text-red-500 hover:border-b-4 border-red-500">Bright Stoires</a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-8 sm:flex">
                    <a href="/home" class="flex items-center font-bold text-md text-red-500 hover:border-b-4 border-red-500">About us</a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-8 sm:flex">
                    <a href="/home" class="flex items-center font-bold text-md text-red-500 hover:border-b-4 border-red-500">Contact us</a>
                </div>
                <div class="flex ml-10">
                    <div class="hidden space-y-12  sm:-my-px sm:ms-10 sm:flex p-4">
                        <input type="text" placeholder="search..." class="rounded-2xl text-red-500">
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-5 sm:flex">
                        <i class="fa-solid fa-cart-shopping flex items-center font-bold text-lg text-red-500 hover:border-b-4 "></i>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-5 sm:flex">
                        <i class="fa-solid fa-user flex items-center font-bold text-lg text-red-500 hover:border-b-4 "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>