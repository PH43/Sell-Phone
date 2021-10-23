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
        DB::enableQueryLog();
 
        $data =  $this->productRepo->filterProduct($param);
     //  dd( DB::getQueryLog());
        if ($rq->ajax()) {
      
           
            if ($rq->cate) {
                $brands = category::with('brands')->where('id', $rq->cate)->get()->toArray();
            } else {
                $brands =  category::with('brands')->get()->toArray();
            }
            $data['brands'] = $brands;
            $data['products'] = $data;

            return response()->json($data);
        } else {
        
            if ($rq->has('search')) {
                $category['category'] = category::get()->toArray();
                $category[0]['brands'] = brand::get();
            } else {
                $category = category::with('brands')->where('id', $rq->cate)->get()->toArray();
            }
      // dd($data);
            //return $category;
            return view('content/body/listProduct', compact('data', 'category'));
        }
    }
}
