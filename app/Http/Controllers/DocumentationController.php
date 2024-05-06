<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TecnicalDocument;

class DocumentationController extends Controller
{
    public function index() {
        $docs = TecnicalDocument::all();

        return view('doc', ['doc' => $docs]);
    }
}
