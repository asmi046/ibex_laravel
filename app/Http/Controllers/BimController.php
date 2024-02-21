<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BimController extends Controller
{
    public function index() {
        return view('bim');
    }
}
