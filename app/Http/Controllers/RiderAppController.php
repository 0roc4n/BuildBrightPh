<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiderAppController extends Controller
{
    public function index(){
        return view('riderApp.index');
    }
}
