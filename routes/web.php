<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;


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
Route::get('/home',[ProductController::class,'home'])->name("home"); 
Route::get('/addproduct',[ProductController::class,'addproduct'])->name("addproduct"); 
Route::POST('/productstore',[ProductController::class,'productstore'])->name("productstore"); 
Route::get('/showproduct',[ProductController::class,'showproduct'])->name("showproduct"); 
Route::get('/editproduct/{id}',[ProductController::class,'editproduct'])->name("editproduct");
Route::POST('/updatedata/{id}',[ProductController::class,'updatedata'])->name("updatedata"); 

