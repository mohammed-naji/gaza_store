<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    function products() {
        $products = Http::get('https://dummyjson.com/products')->json();

        $products = $products['products'];

        return view('api.products', compact('products'));
    }

    function weather() {
        return view('api.weather');
    }
}
