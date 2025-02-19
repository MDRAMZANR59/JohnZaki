<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;

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
Route::get('admin/department',[DepartmentController::class,'index'])->name('department.list');
Route::get('admin/department/Create',[DepartmentController::class,'create'])->name('addDepartment');
Route::post('admin/department/Store',[DepartmentController::class,'store'])->name('saveDepartment');
Route::get('admin/department/edit/{id}',[DepartmentController::class,'edit'])->name('department.edit');
Route::get('admin/department/update/{id}',[DepartmentController::class,'update'])->name('department.update');

require __DIR__.'/auth.php';
