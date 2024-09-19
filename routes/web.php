<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[JobController::class,'index']);

Route::get('/isha',[FrontendController::class,'index']);

// Admin Route
Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::get('/admin/home',[HomeController::class,'index']);