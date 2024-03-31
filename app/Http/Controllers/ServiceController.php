<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $product_all = Service::all();
        return view('service', ['service' => $product_all]);
    }

    public function product_page($slug) {
        $one_product = Service::where('slug', $slug)->first();
        return view('service-page', ['service' => $one_product]);
    }
}
