<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\tagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;






Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/redirect',[HomeController::class,'redirect']);

// Admin panel group route//
Route::get('/dashboard',[dashboardController::class,'dashboard'])->name('dashboard')->middleware('sup');
Route::middleware(['auth'])->prefix('admin')->group(function(){
  
    Route::resource('category',categoryController::class);
    Route::resource('user',UserController::class);
    Route::resource('tag',tagController::class);
    Route::resource('post',PostController::class);
    Route::resource('setting',SettingController::class);
    Route::resource('contact',ContactController::class);
       
});



// frontend Route

Route::get('/',[frontendController::class,'home'])->name('website.home');
Route::get('/category/{slug?}',[frontendController::class,'category'])->name('website.category');
Route::get('/post/{slug?}',[frontendController::class,'post'])->name('website.post');
Route::get('/tag/{slug?}',[frontendController::class,'tag'])->name('website.tag');
Route::get('/popular',[frontendController::class,'popular'])->name('website.popular');
Route::get('/latest',[frontendController::class,'latest'])->name('website.latest');
Route::get('/contact',[frontendController::class,'contact'])->name('website.contact');
Route::post('/contact/store',[frontendController::class,'store'])->name('website.store');
