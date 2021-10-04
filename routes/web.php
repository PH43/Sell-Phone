<?php

use App\Http\Controllers\Admin\ManageProductController;
use App\Http\Controllers\content\DetailProductController;
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
Route::get('home',[HomeController::class ,'home'])->name('home');
Route::get('home/product-category/{id}',[HomeController::class, 'productCategory'])->name('home-product-category');
Route::post('search-product',[HomeController::class ,'search'])->name('search-product');
Route::get('test',[HomeController::class ,'test']);

// Show Product 
Route::get('list-product/category',[ListProductController::class, 'filterProduct'])->name('list-product-category');
Route::get('list-product/category/{cate}/brand/{brand}',[ListProductController::class, 'productBrands'])->name('list-product-brand');

// product Detail
Route::get('product/{id}',[DetailProductController::class, 'detailProduct'])->name('detail-product');
Route::post('product/comment',[DetailProductController::class,'insertComment'])->name('product-comment');
Route::get('product/comment/loadmore/{productId}/{page}',[DetailProductController::class,'loadMoreComments'])->name('load-comment');
Route::get('product/comment/reply/{cmtId}',[DetailProductController::class, 'replyComment'])->name('reply-comment');

// admin
Route::get('admin/statistical',[ManageProductController::class, 'statistical'])->name('admin-Statistical');
Route::get('admin/form-Product',[ManageProductController::class, 'showform'])->name('admin-form-product');
Route::post('admin/insert-product',[ManageProductController::class, 'insertProduct'])->name('admin-insert-product');


