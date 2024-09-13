<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-5 p-5">
    @foreach ($products as $product)
        <div class="relative group border hover:shadow-lg rounded-xl p-4 overflow-hidden" data-aos="fade-left">
            <div class="flex justify-center">
                <img src="images/shop-images/test-product.png" alt="images" class="border rounded-lg transition-all duration-500 ease-in-out group-hover:blur-sm">
            </div>
            <div class=" p-3 text-red-700 font-bold">
                <p>{{$product->product_name}}</p>
                <p>{{$product->category->category_name}}</p>
                <p>₱{{$product->price}}</p>
            </div>
            <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100">
                <a href="{{ url('shop/' . $product->id) }}" class="text-white text-xl font-bold bg-red-700 p-3 rounded-lg">View Details</a>
            </div>
        </div>
    @endforeach
</div>

<div class="mt-5">
    {{ $products->links() }}
</div>
