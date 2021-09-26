<?php

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

Route::get('test',[HomeController::class ,'test']);

// Show Product 
Route::get('list-product/category',[ListProductController::class, 'productCategories'])->name('list-product-category');
Route::get('list-product/category/{cate}/brand/{brand}',[ListProductController::class, 'productBrands'])->name('list-product-brand');

