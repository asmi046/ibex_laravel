<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $service_all = Service::all();
        return view('service', ['service' => $service_all]);
    }

    public function service_page($slug) {
        $one_service = Service::where('slug', $slug)->first();
        return view('service-page', ['service' => $one_service]);
    }
}
