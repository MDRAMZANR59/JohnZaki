<?php

namespace App\Http\Controllers;

use App\Models\Yoke;
use Illuminate\Http\Request;

class YokeController extends Controller
{
    public function index(){
        $datas = Yoke::get();
        return view('backend.layout.product.yoke.list',compact('datas'));
    }

    public function create(){
        return view('backend.layout.product.yoke.create');
    }
    public function store(Request $request){
        $validatio=$request->validate([
            'title'=>'required|min:3|string',
            'image'=>'required|mimes:png,jpg,jpeg|image|max:10240',
        ]);

        $model=new Yoke();
        $model->title=$request->title;

        $imageName=null;
        if($request->image){
            $imageName='Yoke_'.time().'.'.$request->image->extension();
            $request->image->move(public_path('backend/img/'),$imageName);

            $model->image=$imageName;
        }
        $model->save();

        return redirect()->route('yoke.add')->with('success','Data Save Successfull');
    }

    public function edit($id){
        $data=Yoke::findOrFail($id);
        return view('backend.layout.product.yoke.edit',compact('data'));
    }

    public function update(Request $request, $id){
        $validatio=$request->validate([
            'title'=>'required|min:3|string',
            'image'=>'nullable|mimes:png,jpg,jpeg|image|max:10240'
        ]);

        $data=Yoke::findOrFail($id);
        if($request->hasFile('image')){
            if($data->image && file_exists(public_path('backend/img/'.$data->image))){
                unlink(public_path('backend/img/'.$data->image));

                $newImage='Yoke_'.time().'.'.$request->image->extension();
                $request->image->move(public_path('backend/img/'),$newImage);

                $data->image=$newImage;
            }
        }

        $data->title=$request->title;
        $data->update();
        return redirect()->route('yoke.list')->with('info','Data Update Successfull');

    }

    public function delete($id){
        $model=Yoke::findOrFail($id);
        if(file_exists(public_path('backend/img/'.$model->image))){
            unlink(public_path('backend/img/'.$model->image));
        }
        $model->delete();
        return redirect()->to(url()->previous())->with('info','Data Deleted Successfull');
    }
}
