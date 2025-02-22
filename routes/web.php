<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuffController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\YokeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CollarController;
use App\Http\Controllers\FabricController;
use App\Http\Controllers\PlacketController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FrontPleatController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Frontend
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('home/wishlist',[Homecontroller::class,'wishlist'])->name('wishlist');
Route::get('home/notification',[HomeController::class,'notification'])->name('notification');
Route::get('home/product',[HomeController::class,'product'])->name('product');
Route::get('home/buyercentral',[HomeController::class,'buyercentral'])->name('buyercentral');
Route::get('home/helpcenter',[HomeController::class,'helpcenter'])->name('helpcenter');
Route::get('home/get-the-app',[HomeController::class,'getTheApp'])->name('get-the-app');
Route::get('home/supplier',[HomeController::class,'supplier'])->name('supplier');
Route::get('home/trade',[HomeController::class,'trade'])->name('trade');
Route::get('home/store',[HomeController::class,'store'])->name('store');
Route::get('home/terms',[HomeController::class,'terms'])->name('terms');
Route::get('home/privacy',[HomeController::class,'privacy'])->name('privacy');

//admin
Route::get('admin/Dashboard',[AdminController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
//Department
Route::get('admin/All_department',[DepartmentController::class,'index'])->name('department.list');
Route::get('admin/department/Create',[DepartmentController::class,'create'])->name('department.add');
Route::post('admin/department/Store',[DepartmentController::class,'store'])->name('department.save');
Route::get('admin/department/edit/{id}',[DepartmentController::class,'edit'])->name('department.edit');
Route::post('admin/department/update/{id}',[DepartmentController::class,'update'])->name('department.update');
Route::post('admin/department/delete/{id}',[DepartmentController::class,'delete'])->name('department.delete');

//product
Route::get('admin/All_product',[ProductController::class,'index'])->name('product.list');
Route::get('admin/product/create',[ProductController::class,'create'])->name('product.add');

//Color
Route::get('admin/product/All_color',[ColorController::class,'index'])->name('color.list');
Route::get('admin/color/Create',[ColorController::class,'create'])->name('color.add');
Route::post('admin/color/Store',[ColorController::class,'store'])->name('color.save');
Route::get('admin/color/edit/{id}',[ColorController::class,'edit'])->name('color.edit');
Route::post('admin/color/update/{id}',[ColorController::class,'update'])->name('color.update');
Route::post('admin/color/delete/{id}',[ColorController::class,'delete'])->name('color.delete');

//type
Route::get('admin/product/All_Type',[TypeController::class,'index'])->name('type.list');
Route::get('admin/type/Create',[TypeController::class,'create'])->name('type.add');
Route::post('admin/type/Store',[TypeController::class,'store'])->name('type.save');
Route::get('admin/type/edit/{id}',[TypeController::class,'edit'])->name('type.edit');
Route::post('admin/type/update/{id}',[TypeController::class,'update'])->name('type.update');
Route::post('admin/type/delete/{id}',[TypeController::class,'delete'])->name('type.delete');

//fabric
Route::get('admin/product/All_Fabric',[FabricController::class,'index'])->name('fabric.list');
Route::get('admin/fabric/Create',[FabricController::class,'create'])->name('fabric.add');
Route::post('admin/fabric/Store',[FabricController::class,'store'])->name('fabric.save');
Route::get('admin/fabric/edit/{id}',[FabricController::class,'edit'])->name('fabric.edit');
Route::post('admin/fabric/update/{id}',[FabricController::class,'update'])->name('fabric.update');
Route::post('admin/fabric/delete/{id}',[FabricController::class,'delete'])->name('fabric.delete');

//placket
Route::get('admin/product/All_Placket',[PlacketController::class,'index'])->name('placket.list');//
Route::get('admin/placket/Create',[PlacketController::class,'create'])->name('placket.add');
Route::post('admin/placket/Store',[PlacketController::class,'store'])->name('placket.save');
Route::get('admin/placket/edit/{id}',[PlacketController::class,'edit'])->name('placket.edit');
Route::post('admin/placket/update/{id}',[PlacketController::class,'update'])->name('placket.update');
Route::post('admin/placket/delete/{id}',[PlacketController::class,'delete'])->name('placket.delete');

//Size
Route::get('admin/product/All_Size',[SizeController::class,'index'])->name('size.list');
Route::get('admin/size/Create',[SizeController::class,'create'])->name('size.add');
Route::post('admin/size/Store',[SizeController::class,'store'])->name('size.save');
Route::get('admin/size/edit/{id}',[SizeController::class,'edit'])->name('size.edit');
Route::post('admin/size/update/{id}',[SizeController::class,'update'])->name('size.update');
Route::post('admin/size/delete/{id}',[SizeController::class,'delete'])->name('size.delete');

//Collar
Route::get('admin/product/All_Collar',[CollarController::class,'index'])->name('collar.list');//
Route::get('admin/collar/Create',[CollarController::class,'create'])->name('collar.add');
Route::post('admin/collar/Store',[CollarController::class,'store'])->name('collar.save');
Route::get('admin/collar/edit/{id}',[CollarController::class,'edit'])->name('collar.edit');
Route::post('admin/collar/update/{id}',[CollarController::class,'update'])->name('collar.update');
Route::post('admin/collar/delete/{id}',[CollarController::class,'delete'])->name('collar.delete');

//Front Pleat
Route::get('admin/product/All_Front Pleat',[FrontPleatController::class,'index'])->name('frontPleat.list');//
Route::get('admin/frontPleat/Create',[FrontPleatController::class,'create'])->name('frontPleat.add');
Route::post('admin/frontPleat/Store',[FrontPleatController::class,'store'])->name('frontPleat.save');
Route::get('admin/frontPleat/edit/{id}',[FrontPleatController::class,'edit'])->name('frontPleat.edit');
Route::post('admin/frontPleat/update/{id}',[FrontPleatController::class,'update'])->name('frontPleat.update');
Route::post('admin/frontPleat/delete/{id}',[FrontPleatController::class,'delete'])->name('frontPleat.delete');

//Cuff
Route::get('admin/product/All_Cuff',[CuffController::class,'index'])->name('cuff.list');//
Route::get('admin/cuff/Create',[CuffController::class,'create'])->name('cuff.add');
Route::post('admin/cuff/Store',[CuffController::class,'store'])->name('cuff.save');
Route::get('admin/cuff/edit/{id}',[CuffController::class,'edit'])->name('cuff.edit');
Route::post('admin/cuff/update/{id}',[CuffController::class,'update'])->name('cuff.update');
Route::post('admin/cuff/delete/{id}',[CuffController::class,'delete'])->name('cuff.delete');

//yoke
Route::get('admin/product/All_Yoke',[YokeController::class,'index'])->name('yoke.list');//
Route::get('admin/yoke/Create',[YokeController::class,'create'])->name('yoke.add');
Route::post('admin/yoke/Store',[YokeController::class,'store'])->name('yoke.save');
Route::get('admin/yoke/edit/{id}',[YokeController::class,'edit'])->name('yoke.edit');
Route::post('admin/yoke/update/{id}',[YokeController::class,'update'])->name('yoke.update');
Route::post('admin/yoke/delete/{id}',[YokeController::class,'delete'])->name('yoke.delete');

require __DIR__.'/auth.php';
