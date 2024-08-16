<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Home Page') }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        @include('layouts.homenav')
        <div class="">
           <section id="#home " class="mt-28">
                <div class="container">
                    <div class="flex flex-col lg:flex-row justify-center lg:items-center">
                        <div class="w-3/5 ">
                            <div class="text-xl font-semibold">
                                GLOBAL EXCELLENCE IN HARDWARE SOLUTIONS
                            </div>
                            <div class="text-5xl font-bold w-2/3 tracking-[.20em] mt-5">
                                YOUR PARTNER IN TOOLS AND HOME UPGRADES
                            </div>
                            <div class="text-xl font-semibold w-4/5 mt-5">
                                WHERE FUNCTIONALITY MEETS STYLE - EMBRACE THE BEST IN HARDWARE AND HOME IMPROVEMENT WITH BRIGHT BUILD
                            </div>
                            <div class="mt-10">
                                <a href="" class="bg-red-700 text-white p-4 rounded-3xl">Browse our products</a>
                            </div>
                        </div>
                        <div class="absolute">
                            <img src="images/image-stack.png" alt="">
                        </div>
                    </div>
                </div>
           </section>
           <section class="mt-32">
                <div class="flex justify-center mt-4  items-center">
                    <p class="text-center w-3/5 text-xl">
                        BUILD BRIGHT PH is an emerging leader in the Philippines, 
                        providing top-quality hardware and home improvement solutions from renowned global brands.
                    </p>
                </div>
                <div class="flex justify-center mt-4  items-center">
                    <p class="text-3xl font-bold text-red-700">Our Products</p>
                </div>
                <div class="mt-10">
                    <div class="flex justify-center gap-10 m-10">
                        <div class="w-2/5">
                            <img src="images/tools.png" alt="" class="">
                        </div>
                        <div class="w-2/5">
                            <img src="images/powertools.png" alt="">
                        </div>
                        <div class="w-2/5">
                            <img src="images/paints.png" alt="">
                        </div>
                        <div class="w-2/5 hover:hidden">
                            <img src="images/plumbing.png" alt="">
                        </div>
                    </div>
                </div>
           </section>
        </div>
    </body>
</html>
