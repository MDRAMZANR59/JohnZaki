<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('backend.layout.product.list');
    }

    public function create(){
        return view('backend.layout.product.create');
    }
}
