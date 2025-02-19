<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        $datas =Department::paginate(10);
        return view('backend.layout.department.list',compact('datas'));
    }


    public function create(){
        return view('backend.layout.department.create');
    }
    public function store(Request $request, FlasherInterface $flasher){
        $validation=$request->validate([
            'title'=>"required|string|min:1",
            'image'=>"required|image|mimes:png,jpg,jpeg|max:10240"
        ]);

        if($request->image){
            $imageName='dep_'.time().'.'.$request->image->extension();
            $request->image->move(public_path('backend/img'),$imageName);
        }

        $model= new Department();
        $model->title=$request->title;
        $model->image=$imageName;
        $model->save();

        return redirect()->back()->with('success','Data Save Successfull');
    }


    public function edit($id){
        $data = Department::findOrFail($id);
        return view('backend.layout.department.edit',compact('data'));
    }
    public function update(Request $request, $id){
        $validation = $request->validate([
            'title'=>"required|string|min:1",
            'image'=>"required|image|mimes:png,jpg,jpeg|max:10240"
        ]);
        $model= Department::find($id);
        $model->title=$request->title;

        if($request->hasFile('image')){
            if($model->image && file_exists(public_path('backend/img/'.$model->image))){
                unlink(public_path('backend/img/'.$model->image));
            }
            $newImage='dep_'.time().'.'.$request->image->extension();
            $request->image->move(public_path('backend/img'),$newImage);
            $model->image=$newImage;
        }



        $model->update();
        return redirect()->route('showDepartment')->with('success','Data Update Successfull');

    }
}
