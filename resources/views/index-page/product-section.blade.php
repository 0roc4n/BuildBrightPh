<div class="">
    <p class="text-3xl font-bold text-red-700 text-center">Product Listing</p>
    <div class="mt-5 bg-red-700 mr-5 rounded-md">
        <h3 class="text-center p-5 text-4xl text-white font-bold">Featured Products</h3>
        <div class="grid grid-cols-2 mx-2 sm:grid-cols-2 lg:flex gap-3 justify-center mt-5 lg:mx-44 pb-10">
            <x-owl-carousel class="flex justify-center">
                @foreach ($product_featured as $featured)
                    <div class="item">
                        <div class="bg-white rounded-lg p-4 product-card">
                            <img src="{{ asset('images/prod.png') }}" alt="" class="h-44">
                            <div class="product-details">
                                <p class="text-xl font-bold text-red-700">{{ $featured->product_name }}</p>
                                <p class="text-sm font-normal text-red-700 mt-2">{{ Str::limit($featured->category->category_name, 10) }}</p>
                                <p class="text-sm font-normal text-red-700 mt-2">{{ $featured->price }}</p>
                            </div>
                            <a href="{{ url('shop/' . $featured->id) }}" class="bg-red-700 text-white px-2 py-1 rounded-lg text-sm">View Details</a>
                        </div>
                    </div>
                @endforeach
            </x-owl-carousel>
            
        </div>
    </div>
    <p class="text-3xl font-bold text-red-700 text-center mt-5">List of Our Brand</p>
    <div class="mt-5 bg-gray-200 mr-5 rounded-md p-5">
        <div class="grid grid-cols-2 mx-2 sm:grid-cols-2 lg:flex justify-center gap-3">
            <div class="lg:w-1/5 lg:h-full bg-white rounded-lg flex justify-center p-5">
                <img src="images/brand.png" alt="">
            </div>
            <div class="lg:w-1/5 lg:h-full bg-white rounded-lg flex justify-center p-5">
                <img src="images/brand.png" alt="">
            </div>
            <div class="lg:w-1/5 lg:h-full bg-white rounded-lg flex justify-center p-5">
                <img src="images/brand.png" alt="">
            </div>
            <div class="lg:w-1/5 lg:h-full bg-white rounded-lg flex justify-center p-5">
                <img src="images/brand.png" alt="">
            </div>
        </div>
    </div>
</div>