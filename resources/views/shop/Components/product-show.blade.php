<div class="ml-5">
    <div class="flex px-10">
        <div class=" ml-5 mt-10 w-2/5">
            <p class="font-bold text-xl text-red-700">{{$product->product_name}}</p>
            <div class=" flex justify-center border-2 shadow rounded-lg  mt-5 ">
                <img src="/images/shop-images/test-product.png" alt="photo" class="h-full">
            </div>
        </div>
        <div class="w-full ml-5">
            <div class="flex justify-between bg-gray-200 px-3 border">
                <p class="text-2xl font-semibold">Product Details</p><span class="text-2xl">{{$product->item_code}}</span>
            </div>
            <div class="border-2  flex">
                <p class="text-lg font-semibold px-3 py-2 border-r-4">Brand name</p><p class="font-semibold text-lg  px-3 py-2">{{$product->product_brand}}</p>
            </div>
            <div class="border-2  flex">
                <p class="text-lg font-semibold px-3 py-2 border-r-4">Product Category</p><p class="font-semibold text-lg  px-3 py-2">{{$product->category->category_name}}</p>
            </div>
            <div class="mt-5">
                <p class="text-xl font-semibold">Product Description</p>
                <p class="tracking-widest mt-2">{{$product->description}}</p>
            </div>
        </div>
    </div>
</div>  