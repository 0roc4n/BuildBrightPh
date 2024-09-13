<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $product_featured = Products::all();
        return view('index')->with([
            'product_featured' => $product_featured
        ]);
    }
}
