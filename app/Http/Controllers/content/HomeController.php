<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\brands;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $products = category::GetProductCategories(1,6);
        return view('content/body/body' ,compact('products'));
    }
public function productCategory($id){
    $products = category::GetProductCategories($id,6);
  return  response()->json($products);
}

    public function search(Request $rq){
    $search = $rq->search;

    $products = product::where('name' ,'LIKE', "%{$search}%")->orWhere('price', 'LIKE', "%{$search}%")->get();
    return  response()->json($products);

   


    }


    public function insert(){
        $brands = brand::find(2);
        $category_id = [2];
        $brands->categories()->attach($category_id);
   
    }
  
}
