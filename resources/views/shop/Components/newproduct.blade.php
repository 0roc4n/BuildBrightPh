<div class="ml-3 mt-4">
    <select name="" class="form-control rounded-lg bg-red-700 text-white">
        <option value="all" class="text-white">All Categories</option>
        @foreach ($categories as $category)
            <option value="{{$category->id}}" class="text-white">{{$category->category_name}}</option>
        @endforeach
    </select>
</div>