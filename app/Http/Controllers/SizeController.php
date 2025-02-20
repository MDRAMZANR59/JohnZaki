<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index(){
        $datas = Size::get();
        return view('backend.layout.product.size.list',compact('datas'));
    }

    public function create(){
        return view('backend.layout.product.size.create');
    }
    public function store(Request $request){
        $validation = $request->validate([
            'sizeName'=>"required|string|min:1",
            'chest'=>"required|string|min:1",
            'length'=>"required|string|min:1",
            'sleeveLength'=>"required|string|min:1",
        ]);

        $model= new Size();
        $model->sizeName = $request->sizeName;
        $model->chest = $request->chest;
        $model->length = $request->length;
        $model->sleeveLength = $request->sleeveLength;
        $model->save();

        return redirect()->route('size.list')->with('success','Data Save Successfull');
    }
    public function edit($id){
        $data=Size::findOrFail($id);
        return view('backend.layout.product.size.edit',compact('data'));

    }
    public function update(Request $request,$id){
        $validation = $request->validate([
            'sizeName'=>"required|string|min:1",
            'chest'=>"required|string|min:1",
            'length'=>"required|string|min:1",
            'sleeveLength'=>"required|string|min:1",
        ]);

        $model= Size::findOrFail($id);
        $model->sizeName = $request->sizeName;
        $model->chest = $request->chest;
        $model->length = $request->length;
        $model->sleeveLength = $request->sleeveLength;
        $model->update();

        return redirect()->route('size.list')->with('success','Data Update Successfull');
    }
    public function delete($id){
        $model = Size::findOrFail($id);
        $model->delete();
        return redirect()->to(url()->previous())->with('info','Data Deleted Successfull');
    }
}
