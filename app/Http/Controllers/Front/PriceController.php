<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;

class PriceController extends Controller
{
    public function index(){
        $subscribes = Subscribe::get();
        return view('price', compact('subscribes'));
    }
}
