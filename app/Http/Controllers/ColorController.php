<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index(){
        $datas = Color::get();
        return view('backend.layout.product.color.list',compact('datas'));
    }

    public function create(){
        return view('backend.layout.product.color.create');
    }
    public function store(Request $request){
        $validation = $request->validate([
            'title'=>"required|string|min:3",
            'color'=>"required|string|max:7"
        ]);

        $model= new Color();
        $model->title = $request->title;
        $model->color = $request->color;
        $model->save();

        return redirect()->route('color.list')->with('success','Data Save Successfull');
    }
    public function edit($id){
        $data=Color::findOrFail($id);
        return view('backend.layout.product.color.edit',compact('data'));

    }
    public function update(Request $request,$id){
        $validation = $request->validate([
            'title'=>"required|string|min:3",
            'color'=>"required|string|max:7"
        ]);

        $model=Color::findOrFail($id);
        $model->title = $request->title;
        $model->color = $request->color;
        $model->update();

        return redirect()->route('color.list')->with('success','Data Update Successfull');
    }
    public function delete($id){
        $model = Color::findOrFail($id);
        $model->delete();
        return redirect()->to(url()->previous())->with('info','Data Deleted Successfull');
    }
}
