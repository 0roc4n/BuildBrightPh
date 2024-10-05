<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Home Page') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        .toggle-wrapper {
            display: flex;
            margin-top: 20px;
            cursor: pointer;
        }
        .toggle-option {
            margin-right: 20px;
            padding-bottom: 5px;
            font-size: 20px;
            font-weight: bold;
            color: #aaa;
        }
        .toggle-option.active {
            color: black;
            border-bottom: 2px solid red;
        }
        .content {
            display: none;
            margin-top: 20px;
        }
        .content.active {
            display: block;
        }
    </style>
</head>
<body class="font-sans antialiased">
    @include('layouts.homenav')

    <main>
        <div class="">
            <div class="flex px-10">
                <div class="mt-20 ml-20 ">
                    <h2 class="tracking-widest font-extrabold text-5xl">Terms and Conditions</h2>
                    <p class="mt-12 font-semibold text-2xl w-4/5">BUILD BRIGHT PH WEBSITE AND MOBILE APPLICATION TERMS AND CONDITIONS</p>
    
                    <!-- Toggle Switch -->
                    <div class="toggle-wrapper flex justify-center">
                        <div id="shopperToggle" class="toggle-option active">Shopper</div>
                        <div id="riderToggle" class="toggle-option">Rider</div>
                    </div>
    
                    <!-- Shopper Content -->
                    <div class="border-t-2 mt-2">

                    </div>
                    <div id="shopperContent" class="content active">
                        <p class="text-xl font-bold">LAST UPDATED: SEPTEMBER 09, 2024</p>
                        @include('shopApp.components.shopper')
                    </div>
    
                    <!-- Rider Content -->
                    <div id="riderContent" class="content">
                        <p class="text-xl font-bold">LAST UPDATED: SEPTEMBER 09, 2024</p>
                        <div class="mt-12">
                            <p class="text-lg font-bold">INTRODUCTION</p>
                            <p class="text-lg">
                                Welcome to Build Bright PH, where we strive to deliver goods efficiently and provide opportunities for individuals looking to earn income as delivery riders. 
                                By becoming a Build Bright PH Rider, you are joining a community dedicated to reliability, professionalism, and excellent customer service.
                            </p>
                            
                        </div>
                    </div>
                    <div class="mx-auto mt-20">
                        <p class="text-center text-3xl font-bold text-gray-800">Frequently Asked Questions</p>
                        
                        <div class="mt-5 flex justify-center space-x-4">
                            <button class="text-lg font-semibold border-b-2 border-red-500 pb-2  focus:outline-none" onclick="toggleTab('shopper')">Shopper</button>
                            <button class="text-lg font-semibold border-b-2 border-red-500 pb-2 focus:outline-none" onclick="toggleTab('rider')">Rider</button>
                        </div>
                    
                        <div id="shopper" class="mt-5">
                            <div class="space-y-4">
                                <div class="flex justify-between items-center border-b py-2 text-2xl font-bold">
                                    <span>How do I place an order?</span>
                                    <svg class="w-6 h-6 transform rotate-0 transition-transform duration-300" onclick="toggleAnswer(this)" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </div>
                                <div class="hidden">
                                    <p class="text-gray-700">You can place an order by selecting products and proceeding to checkout.</p>
                                </div>
                    
                                <div class="flex justify-between items-center border-b py-2 text-2xl font-bold">
                                    <span>Is my personal information safe?</span>
                                    <svg class="w-6 h-6 transform rotate-0 transition-transform duration-300" onclick="toggleAnswer(this)" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </div>
                                <div class="hidden">
                                    <p class="text-gray-700">Yes, we take the privacy and security of your personal information seriously.</p>
                                </div>
                    
                                <div class="flex justify-between items-center border-b py-2 text-2xl font-bold">
                                    <span>Are there any shipping charges?</span>
                                    <svg class="w-6 h-6 transform rotate-0 transition-transform duration-300" onclick="toggleAnswer(this)" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </div>
                                <div class="hidden">
                                    <p class="text-gray-700">Shipping charges depend on the delivery location and order total.</p>
                                </div>
                    
                                <div class="flex justify-between items-center border-b py-2 text-2xl font-bold">
                                    <span>How do I use discount codes or coupons?</span>
                                    <svg class="w-6 h-6 transform rotate-0 transition-transform duration-300" onclick="toggleAnswer(this)" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </div>
                                <div class="hidden">
                                    <p class="text-gray-700">You can enter discount codes during the checkout process.</p>
                                </div>
                    
                                <div class="flex justify-between items-center border-b py-2 text-2xl font-bold">
                                    <span>Can I track my order?</span>
                                    <svg class="w-6 h-6 transform rotate-0 transition-transform duration-300" onclick="toggleAnswer(this)" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </div>
                                <div class="hidden">
                                    <p class="text-gray-700">Yes, you can track your order status in your account section.</p>
                                </div>
                            </div>
                        </div>
                    
                        <div id="rider" class="mt-5 hidden">
                            <div class="space-y-4">
                                <div class="flex justify-between items-center border-b py-2 text-2xl font-bold">
                                    <span>How do I get paid?</span>
                                    <svg class="w-6 h-6 transform rotate-0 transition-transform duration-300" onclick="toggleAnswer(this)" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </div>
                                <div class="hidden">
                                    <p class="text-gray-700">Riders are paid on a weekly basis, with payment methods detailed in the rider agreement.</p>
                                </div>
                        
                                <div class="flex justify-between items-center border-b py-2 text-2xl font-bold">
                                    <span>What if I need help during a delivery?</span>
                                    <svg class="w-6 h-6 transform rotate-0 transition-transform duration-300" onclick="toggleAnswer(this)" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </div>
                                <div class="hidden">
                                    <p class="text-gray-700">You can contact customer support through the app for assistance during deliveries.</p>
                                </div>
                        
                                <div class="flex justify-between items-center border-b py-2 text-2xl font-bold">
                                    <span>How do I accept or decline a delivery request?</span>
                                    <svg class="w-6 h-6 transform rotate-0 transition-transform duration-300" onclick="toggleAnswer(this)" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </div>
                                <div class="hidden">
                                    <p class="text-gray-700">Delivery requests can be accepted or declined directly in the app.</p>
                                </div>
                        
                                <div class="flex justify-between items-center border-b py-2 text-2xl font-bold">
                                    <span>What happens if a customer is not available to receive the parcel?</span>
                                    <svg class="w-6 h-6 transform rotate-0 transition-transform duration-300" onclick="toggleAnswer(this)" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </div>
                                <div class="hidden">
                                    <p class="text-gray-700">If a customer is unavailable, you will be instructed to return the parcel to the nearest facility.</p>
                                </div>
                        
                                <div class="flex justify-between items-center border-b py-2 text-2xl font-bold">
                                    <span>Do I need to use my own vehicle?</span>
                                    <svg class="w-6 h-6 transform rotate-0 transition-transform duration-300" onclick="toggleAnswer(this)" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </div>
                                <div class="hidden">
                                    <p class="text-gray-700">Yes, you must have your own vehicle to make deliveries.</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="mt-20">
                        <p class="text-center text-3xl font-bold">Have A Question? <a href="" class="text-red-600">Send Us A Message</a></p>
                    </div>
                </div>
                <div class="hidden sm:block border w-2/3">
                    hell
                </div>
            </div>
            <button id="backToTop" class="fixed bottom-5 right-5 bg-red-600 text-white px-3 py-1 rounded-full shadow-lg hidden">
                <i class="fa fa-arrow-up"></i>
            </button>   
        </div>
    </main>

    @include('layouts.footer')
    <script>
        AOS.init();

        // JavaScript to handle the toggle
        document.getElementById('shopperToggle').addEventListener('click', function () {
            document.getElementById('shopperToggle').classList.add('active');
            document.getElementById('riderToggle').classList.remove('active');
            document.getElementById('shopperContent').classList.add('active');
            document.getElementById('riderContent').classList.remove('active');
        });

        document.getElementById('riderToggle').addEventListener('click', function () {
            document.getElementById('riderToggle').classList.add('active');
            document.getElementById('shopperToggle').classList.remove('active');
            document.getElementById('riderContent').classList.add('active');
            document.getElementById('shopperContent').classList.remove('active');
        });

        function toggleAnswer(icon) {
        const answer = icon.parentElement.nextElementSibling;
        answer.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    }

    function toggleTab(tab) {
        document.getElementById('shopper').classList.toggle('hidden', tab !== 'shopper');
        document.getElementById('rider').classList.toggle('hidden', tab !== 'rider');
        
        const shopperButton = document.querySelector('button[onclick="toggleTab(\'shopper\')"]');
        const riderButton = document.querySelector('button[onclick="toggleTab(\'rider\')"]');
        
        if (tab === 'shopper') {
            shopperButton.classList.add('border-red-500', 'text-black');
            shopperButton.classList.remove('text-gray-500');
            riderButton.classList.remove('border-b-2', 'border-red-500');
            riderButton.classList.add('text-gray-500');
        } else {
            riderButton.classList.add('border-b-2', 'border-red-500', 'text-black');
            riderButton.classList.remove('text-gray-500');
            shopperButton.classList.remove('border-b-2', 'border-red-500');
            shopperButton.classList.add('text-gray-500');
        }
    }
    </script>
</body>
</html>
