<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.layout.index');
    }
    public function wishlist(){
        return view('frontend.layout.wishlist');
    }
    public function notification(){
        return view('frontend.layout.notification');
    }
    public function product(){
        return view('frontend.layout.product');
    }
    public function buyercentral(){
        return view('frontend.layout.buyercentral');
    }
    public function helpcenter(){
        return view('frontend.layout.helpcenter');
    }
    public function getTheApp(){
        return view('frontend.layout.getTheApp');
    }
    public function supplier(){
        return view('frontend.layout.supplier');
    }
    public function trade(){
        return view('frontend.layout.trade');
    }
    public function store(){
        return view('frontend.layout.store');
    }
    public function terms(){
        return view('frontend.layout.terms');
    }
    public function privacy(){
        return view('frontend.layout.privacy');
    }
}
