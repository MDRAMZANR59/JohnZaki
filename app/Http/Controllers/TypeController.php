<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
     public function index(){
        $datas = Type::get();
        return view('backend.layout.product.type.list',compact('datas'));
    }

    public function create(){
        return view('backend.layout.product.type.create');
    }
    public function store(Request $request){
        $validation = $request->validate([
            'title'=>"required|string|min:3",
        ]);

        $model= new Type();
        $model->title = $request->title;
        $model->save();

        return redirect()->route('type.list')->with('success','Data Save Successfull');
    }
    public function edit($id){
        $data=Type::findOrFail($id);
        return view('backend.layout.product.type.edit',compact('data'));

    }
    public function update(Request $request,$id){
        $validation = $request->validate([
            'title'=>"required|string|min:3",
        ]);

        $model= Type::findOrFail($id);
        $model->title = $request->title;
        $model->update();

        return redirect()->route('type.list')->with('success','Data Update Successfull');
    }
    public function delete($id){
        $model = Type::findOrFail($id);
        $model->delete();
        return redirect()->to(url()->previous())->with('info','Data Deleted Successfull');
    }
}
