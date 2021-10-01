<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\brand_category;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function detailProduct($id)
    {
        


        $product = product::with('brand_category','image')->where('id', $id)->get()->toArray();

        $categoryBrand = category::categoryBrand(

            $product[0]['brand_category']['brand_id']

           ,$product[0]['brand_category']['category_id']
             );
             

         
        return  view('content/body/detailproduct', compact('product','categoryBrand'));
    }
}
