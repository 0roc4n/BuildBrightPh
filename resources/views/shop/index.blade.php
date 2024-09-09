<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Home Page') }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body class="font-sans antialiased">
    @include('layouts.homenav')
    <div class="relative w-full h-full p-10">
        <!-- Blurred Background -->
        <div class="blur-background absolute inset-0" style="background-image: url('images/shop-images/bg-shop.png'); background-size: cover; background-position: center;">
        </div>
        <!-- Non-blurred Content -->
        <div class="flex justify-center relative z-10">
            <div class="w-1/2">
                <img src="images/shop-images/ads.png" alt="" class="overlay rounded-lg shadow-lg">
            </div>
        </div>
    </div>
    <div class="bg-gray-400 p-2">
        <p class="ml-10 font-semibold text-white">Home / Shop</p>
    </div>
    {{-- this is for the product section --}}
    <div class="flex flex-col md:flex-row justify-center gap-5 mt-10">
        <!-- Category Section -->
        <div class="category w-full md:w-1/5 ml-0 md:ml-10">
            <!-- Shop by Category -->
            <div class="border-l-8 border-red-700">
                <span class="font-extrabold text-2xl ml-5 md:ml-10 text-red-700">
                    Shop by Category
                </span>
            </div>
            @include('shop.components.category')
    
            <!-- Bright Promos (Hidden on small screens) -->
            <div class="border-l-8 border-red-700 mt-10 hidden md:block">
                <span class="font-extrabold text-2xl ml-10 text-red-700">
                    Bright Promos
                </span>
            </div>
            @include('shop.components.promos', ['class' => 'hidden md:block'])
    
            <!-- New Products (Hidden on small screens) -->
            <div class="border-l-8 border-red-700 mt-10 hidden md:block">
                <span class="font-extrabold text-2xl ml-10 text-red-700">
                    New Products
                </span>
            </div>
        </div>
    
        <!-- Product Section -->
        <div class="product w-full md:w-5/6">
            <div class="bg-gray-300 px-5 py-2 rounded-lg">
                <div class="flex justify-between">
                    <p class="text-white font-bold mt-1">{{$product_count}} <span class="font-normal"> Products found</span></p>
                    <div class="flex gap-5">
                        <select name="" id="" class="rounded-3xl px-5 py-1 border-0">
                            <option value="" default>Sort by</option>
                            <option value="">Price</option>
                        </select>
                        <input type="text" placeholder="Search items..." class="form-control rounded-3xl px-3 py-1">
                    </div>
                </div>
            </div>
            @include('shop.components.products')
        </div>
    </div>
    
    @include('layouts.footer') 
</body>
</html>