<?php

namespace App\Http\Controllers;

use App\Models\Cuff;
use Illuminate\Http\Request;

class CuffController extends Controller
{
    public function index(){
        $datas = Cuff::get();
        return view('backend.layout.product.cuff.list',compact('datas'));
    }

    public function create(){
        return view('backend.layout.product.cuff.create');
    }
    public function store(Request $request){
        $validatio=$request->validate([
            'title'=>'required|min:3|string',
            'image'=>'required|mimes:png,jpg,jpeg|image|max:10240',
        ]);

        $model=new Cuff();
        $model->title=$request->title;

        $imageName=null;
        if($request->image){
            $imageName='Cuff_'.time().'.'.$request->image->extension();
            $request->image->move(public_path('backend/img/'),$imageName);

            $model->image=$imageName;
        }
        $model->save();

        return redirect()->route('cuff.add')->with('success','Data Save Successfull');
    }

    public function edit($id){
        $data=Cuff::findOrFail($id);
        return view('backend.layout.product.cuff.edit',compact('data'));
    }

    public function update(Request $request, $id){
        $validatio=$request->validate([
            'title'=>'required|min:3|string',
            'image'=>'nullable|mimes:png,jpg,jpeg|image|max:10240'
        ]);

        $data=Cuff::findOrFail($id);
        if($request->hasFile('image')){
            if($data->image && file_exists(public_path('backend/img/'.$data->image))){
                unlink(public_path('backend/img/'.$data->image));

                $newImage='Cuff_'.time().'.'.$request->image->extension();
                $request->image->move(public_path('backend/img/'),$newImage);

                $data->image=$newImage;
            }
        }

        $data->title=$request->title;
        $data->update();
        return redirect()->route('cuff.list')->with('info','Data Update Successfull');

    }

    public function delete($id){
        $model=Cuff::findOrFail($id);
        if(file_exists(public_path('backend/img/'.$model->image))){
            unlink(public_path('backend/img/'.$model->image));
        }
        $model->delete();
        return redirect()->to(url()->previous())->with('info','Data Deleted Successfull');
    }
}
