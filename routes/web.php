<?php

use App\Http\Controllers\Admin\ManageProductController;
use App\Http\Controllers\content\HomeController;
use App\Http\Controllers\content\ListProductController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();




//Home
Route::get('home',[HomeController::class ,'home']);
Route::get('home/product-category/{id}',[HomeController::class, 'productCategory'])->name('home-product-category');

Route::get('search/{search}',[HomeController::class ,'search'])->name('search');

// Show Product 
Route::get('list-product/category',[ListProductController::class, 'productCategories'])->name('list-product-category');
Route::get('list-product/category/{cate}/brand/{brand}',[ListProductController::class, 'productBrands'])->name('list-product-brand');


// admin
Route::get('admin/statistical',[ManageProductController::class, 'statistical'])->name('admin-Statistical');
Route::get('admin/form-Product',[ManageProductController::class, 'showform'])->name('admin-form-product');
Route::post('admin/add-product',[ManageProductController::class, 'addProduct'])->name('admin-add-product');
