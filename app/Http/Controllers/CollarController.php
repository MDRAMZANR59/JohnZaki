<?php

namespace App\Http\Controllers;

use App\Models\Collar;
use Illuminate\Http\Request;

class CollarController extends Controller
{
    public function index(){
        $datas = Collar::get();
        return view('backend.layout.product.collar.list',compact('datas'));
    }

    public function create(){
        return view('backend.layout.product.collar.create');
    }
    public function store(Request $request){
        $validatio=$request->validate([
            'title'=>'required|min:3|string',
            'image'=>'required|mimes:png,jpg,jpeg|image|max:10240',
        ]);

        $model=new Collar();
        $model->title=$request->title;

        $imageName=null;
        if($request->image){
            $imageName='Collar_'.time().'.'.$request->image->extension();
            $request->image->move(public_path('backend/img/'),$imageName);

            $model->image=$imageName;
        }
        $model->save();

        return redirect()->route('collar.add')->with('success','Data Save Successfull');
    }

    public function edit($id){
        $data=Collar::findOrFail($id);
        return view('backend.layout.product.collar.edit',compact('data'));
    }

    public function update(Request $request, $id){
        $validatio=$request->validate([
            'title'=>'required|min:3|string',
            'image'=>'nullable|mimes:png,jpg,jpeg|image|max:10240'
        ]);

        $data=Collar::findOrFail($id);
        if($request->hasFile('image')){
            if($data->image && file_exists(public_path('backend/img/'.$data->image))){
                unlink(public_path('backend/img/'.$data->image));

                $newImage='Collar_'.time().'.'.$request->image->extension();
                $request->image->move(public_path('backend/img/'),$newImage);

                $data->image=$newImage;
            }
        }

        $data->title=$request->title;
        $data->update();
        return redirect()->route('collar.list')->with('info','Data Update Successfull');

    }

    public function delete($id){
        $model=Collar::findOrFail($id);
        if(file_exists(public_path('backend/img/'.$model->image))){
            unlink(public_path('backend/img/'.$model->image));
        }
        $model->delete();
        return redirect()->to(url()->previous())->with('info','Data Deleted Successfull');
    }
}
