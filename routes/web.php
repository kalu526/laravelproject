<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriteController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\singleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Home',function(){
    return view('Blog');
});
Route::get('/single',function(){
    return view('singlepost');
});
Route::get('/write',function(){
    return view('write');
});
Route::get('/setting',function(){
    return view('setting');
});

Route::get('/',[RegisterController::class,'create'])->name('register.user');
Route::post('/handleregister',[RegisterController::class,'store'])->name('handle.user');
Route::get('/handlelogout',[RegisterController::class,'signout'])->name('handle.signout');
Route::get('/login',[LoginController::class,'create'])->name('login.user');
Route::post('/handlelogin',[LoginController::class,'store'])->name('handle.login');
Route::get('/setting',[SettingController::class,'create'])->name('setting.user');
Route::post('/handlesetting/{id}',[SettingController::class,'update'])->name('update.user');
Route::get('/handledelete/{id}',[SettingController::class,'destroy'])->name('delete.user');
Route::get('/Home',[HomeController::class,'create'])->name('Home.user');
Route::get('/singlepost/{id}',[HomeController::class,'show'])->name('singlepost.post');
Route::get('/write',[WriteController::class,'create'])->name('Write.user');
Route::post('/handlewrite',[WriteController::class,'store'])->name('publish.post');
Route::get('/about',[AboutController::class,'create'])->name('About.user');
Route::get('/contact',[ContactController::class,'create'])->name('Contact.user');
Route::get('/editpost/{id}',[HomeController::class,'index'])->name('editpost.post');
Route::post('/update/{id}',[HomeController::class,'update'])->name('update.post');
Route::get('/delete/{id}',[HomeController::class,'destroy'])->name('delete.post');