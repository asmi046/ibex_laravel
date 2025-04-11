<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $product_all = Product::orderBy('order', 'ASC')->paginate(8);
        return view('product', ['products' => $product_all]);
    }

    public function product_page($slug) {
        $one_product = Product::where('slug', $slug)->first();
        return view('product-page', ['product' => $one_product]);
    }
}
