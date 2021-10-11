<?php

use App\Http\Controllers\Admin\ManageProductController;
use App\Http\Controllers\content\CartController;
use App\Http\Controllers\content\DetailProductController;
use App\Http\Controllers\content\HomeController;
use App\Http\Controllers\content\ListProductController;
use App\Http\Controllers\content\orderController;
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



Auth::routes();

//Home
Route::get('home',[HomeController::class ,'home'])->name('home');
Route::get('home/product-category/{id}',[HomeController::class, 'productCategory'])->name('home-product-category');
Route::get('home/product-buylot/{id}',[HomeController::class, 'productBuyLot'])->name('home-product-buyLot');
Route::post('search-product',[HomeController::class ,'search'])->name('search-product');

Route::get('test',[HomeController::class, 'test']);

// Show Product 
Route::get('list-product/category',[ListProductController::class, 'filterProduct'])->name('list-product-category');
Route::get('list-product/category/{cate}/brand/{brand}',[ListProductController::class, 'productBrands'])->name('list-product-brand');

// product Detail
Route::get('product/{id}',[DetailProductController::class, 'detailProduct'])->name('detail-product');
Route::post('product/comment',[DetailProductController::class,'insertComment'])->name('product-comment');
Route::get('product/comment/loadmore/{productId}/{page}',[DetailProductController::class,'loadMoreComments'])->name('load-comment');
Route::get('product/comment/reply/{cmtId}',[DetailProductController::class, 'replyComment'])->name('reply-comment');
Route::post('product/rate',[DetailProductController::class, 'rate'])->name('rate');

// Cart
Route::get('cart/show',[CartController::class, 'showCart'])->name('show-cart');
Route::get('cart/{id}',[CartController::class, 'addToCart'])->name('addToCart');
Route::get('cart/{id}/update/{qty}',[CartController::class, 'updateCart'])->name('updateCart');
Route::get('cart/delete/{id}',[CartController::class, 'deleteCart'])->name('deleteCart');
// order
Route::get('cart/address/dictrict/{id}',[orderController::class, 'dictrict'])->name('dictrict');
Route::get('cart/address/ward/{id}',[orderController::class, 'ward'])->name('ward');
Route::post('order/product',[orderController::class, 'order'])->name('order');


// admin
Route::get('admin/statistical',[ManageProductController::class, 'statistical'])->name('admin-Statistical');
Route::get('admin/form-Product',[ManageProductController::class, 'showform'])->name('admin-form-product');
Route::post('admin/insert-product',[ManageProductController::class, 'insertProduct'])->name('admin-insert-product');
Route::get('admin/discount',[ManageProductController::class, 'discount'])->name('admin-discount');
Route::post('admin/insert/discount',[ManageProductController::class, 'insertDiscount'])->name('insert-discount');
