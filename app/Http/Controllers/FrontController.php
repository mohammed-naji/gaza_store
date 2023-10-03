<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index() {
        $categories = Category::all();
        return view('front.index', compact('categories'));
    }

    function about() {
        return view('front.about');
    }

    function products() {
        $products = Product::latest('id')->paginate(9);
        return view('front.products', compact('products'));
    }

    function products_single($id) {
        $product = Product::findOrFail($id);
        return view('front.products_single', compact('product'));
    }

    function category($id) {
        $category = Category::findOrFail($id);
        $products = $category->products()->latest('id')->paginate(9);
        return view('front.category', compact('category', 'products'));
    }

    function contact() {
        return view('front.contact');
    }

}
