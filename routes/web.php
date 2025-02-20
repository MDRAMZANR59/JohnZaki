<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\FabricController;
use App\Http\Controllers\PlacketController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DepartmentController;

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

require __DIR__.'/auth.php';
