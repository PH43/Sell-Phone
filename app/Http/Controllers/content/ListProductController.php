<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\brand_category;
use App\Models\category;
use App\Models\product;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListProductController extends Controller
{
    protected $productRepo;

    public function __construct(ProductRepositoryInterface $productRepo)
    {

        $this->productRepo = $productRepo;
    }

    public function filterProduct(Request $rq)
    {

        $param = $rq->all();
    
          $data =  $this->productRepo->filterProduct($param);
       
        if ($rq->ajax()) {
           
            return response()->json($data);
        } else {

            $category = category::BrandCategory($rq->cate);

            return view('content/body/listProduct', compact('data', 'category',));
        }
    }
}
