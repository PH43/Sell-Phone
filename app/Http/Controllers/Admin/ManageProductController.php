<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\brand_category;
use App\Models\category;
use Illuminate\Http\Request;

class ManageProductController extends Controller
{
    public function statistical(){
        return view('admin/body/body');
    }
    public function showform(Request $rq){
        $category = category::with(['brands' => function ($q) use ($rq) {
           if($rq->has('category')){
            $q->where('category_id' , $rq->category);
           }
        }])->get()->toArray();

    if($rq->ajax()) {

     return response()->json($category);   
     
    }else{
        return view('admin/body/add-product',compact('category'));
    }
 

    }
    public function addProduct(Request $rq){
     $test =   brand_category::select("id")->where('brand_id', $rq->brand_id)->where('category_id', $rq->category_id)->get()->toArray();

        return response()->json($test);
    }

   
}
