<?php

namespace App\Http\Controllers;

use App\Models\Placket;
use Illuminate\Http\Request;

class PlacketController extends Controller
{
    public function index(){
        $datas = Placket::get();
        return view('backend.layout.product.placket.list',compact('datas'));
    }
}
