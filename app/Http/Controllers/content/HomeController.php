<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\brands;
use App\Models\categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $products = categories::GetProductCategories(1,6);
        return view('content/body/body' ,compact('products'));
    }
public function productCategory($id){
    $products = categories::GetProductCategories($id,6);
  return  response()->json($products);
}

    public function test(){
        $products =  brands::get();

        return $products;
    }
    public function insert(){
        $brands = brands::find(2);
        $category_id = [2];
        $brands->categories()->attach($category_id);
   
    }
  
}
