<?php

namespace App\Http\Controllers;

use App\Models\Fabric;
use Illuminate\Http\Request;

class FabricController extends Controller
{
    public function index(){
        $datas = Fabric::get();
        return view('backend.layout.product.fabric.list',compact('datas'));
    }

    public function create(){
        return view('backend.layout.product.fabric.create');
    }
    public function store(Request $request){
        $validation = $request->validate([
            'title'=>"required|string|min:3",
        ]);

        $model= new Fabric();
        $model->title = $request->title;
        $model->save();

        return redirect()->route('fabric.list')->with('success','Data Save Successfull');
    }
    public function edit($id){
        $data=Fabric::findOrFail($id);
        return view('backend.layout.product.fabric.edit',compact('data'));

    }
    public function update(Request $request,$id){
        $validation = $request->validate([
            'title'=>"required|string|min:3",
        ]);

        $model= Fabric::findOrFail($id);
        $model->title = $request->title;
        $model->update();

        return redirect()->route('fabric.list')->with('success','Data Update Successfull');
    }
    public function delete($id){
        $model = Fabric::findOrFail($id);
        $model->delete();
        return redirect()->to(url()->previous())->with('info','Data Deleted Successfull');
    }
}
