<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;

use App\Models\category;

use App\Models\image;
use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {


          $products = category::productCategory(1,6);

          //return ($products);


        return view('content/body/body' ,compact('products'));

        
    }
public function productCategory($id){
    $products = category::productCategory($id,6);

  return  response()->json($products);
}

    public function search(Request $rq){
    $search = $rq->search;

    $products = product::where('name' ,'LIKE', "%{$search}%")->orWhere('price', 'LIKE', "%{$search}%")->get();
    return  response()->json($products);

   


    }
    public function test(){
     
        product::truncate();
        image::truncate();

       
    }



  
}
