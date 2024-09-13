<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $product_featured = Products::where('is_available', 1)->get();
        $brands = Brands::all();
        return view('index')->with([
            'product_featured' => $product_featured,
            'brands' => $brands
        ]);
    }
}
