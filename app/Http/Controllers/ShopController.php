<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\Products;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all();
        $products = Products::paginate(12);
        $product_count = Products::count();
        
        return view('shop.index')->with([
            'categories' => $categories,
            'product_count' => $product_count,
            'products' => $products
        ]);
    }
    
}
