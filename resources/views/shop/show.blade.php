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
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>  

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </head>
<body class="font-sans antialiased">
    @include('layouts.homenav')
    <div class="relative w-full h-full p-10">
        <!-- Blurred Background -->
        <div class="blur-background absolute inset-0" style="background-image: url('/images/shop-images/bg-shop.png'); background-size: cover; background-position: center;">
        </div>
        <!-- Non-blurred Content -->
        <div class="flex justify-center relative z-10">
            <div class="w-1/2">
                <img src="/images/shop-images/ads.png" alt="" class="overlay rounded-lg shadow-lg">
            </div>
        </div>
    </div>
    <div class="bg-gray-400 p-2">
        <p class="ml-10 font-semibold text-white"><a href="/index">Home</a> / <a href="/shop">Shop</a> / <a href="">{{$product->product_name}}</a></p>
    </div>
    {{-- this is for the product section --}}
    <div class="flex flex-col md:flex-row justify-center gap-5 mt-10 px-10">
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
            @include('shop.components.product-show')
        </div>
    </div>
    
    @include('layouts.footer') 
    <script>
        AOS.init();
    </script>
</body>
</html>