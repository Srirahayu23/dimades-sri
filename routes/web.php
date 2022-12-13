<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MitraController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FoodProductController;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// --ROUTE PENGUNJUNG--
Route::get('/', function(){
    return view('welcome');
});

// --ROUTE DASHBOARD--
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('admin/mitra', MitraController::class)->middleware('auth')->names('mitra');
Route::resource('admin/category', CategoryController::class)->middleware('auth')->names('category');
Route::resource('admin/food', ProductController::class)->middleware('auth')->names('food');
Route::resource('admin/food', FoodProductController::class)->middleware('auth')->names('food');
// Route::resource('admin/item', ProductController::class)->middleware('auth')->names('item');