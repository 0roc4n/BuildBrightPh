<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopAppController extends Controller
{
    public function index(){
        return view('shopApp.index');
    }
}
