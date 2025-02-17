<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

require __DIR__.'/auth.php';
