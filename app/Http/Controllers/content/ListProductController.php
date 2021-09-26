<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\brands;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListProductController extends Controller
{
    public function productCategories(Request $rq)
    {

        $brands = categories::BrandInCategory($rq->cate);
       $products = categories::ProductInCategory($rq->colum, $rq->type, $rq->qty,$rq->cate);
    
return $products;
  
    }

    public function productBrands(Request $q)
    {
        $category = $q->cate;
        $brands    = explode(',', $q->brand);
    }

    public function testproduct($cate)
    {
        return $cate;
    }
}
