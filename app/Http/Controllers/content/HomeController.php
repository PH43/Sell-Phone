<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\order_detail;
use App\Models\order_information;
use App\Models\product;
use App\Models\province;
use App\Repositories\HomeRepositoryInterface;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    protected $productRepo;

    public function __construct(HomeRepositoryInterface $productRepo)
    {

        $this->productRepo = $productRepo;
    }

    public function home()
    {


        $products['new'] = $this->productRepo->productCategory(1);
        $products['buyLot'] = $this->productRepo->topProduct(1,'order_details');
        $products['rating'] = $this->productRepo->topProduct(1,'ratings');
       //dd($products);
        return view('content/body/body', compact('products'));
    }
    public function productCategory($id)
    {
        $products = $this->productRepo->productCategory($id);

        return  response()->json($products);
    }

    public function topProduct($id,$table)
    {
        $products = $this->productRepo->topProduct($id,$table);

        return  response()->json($products);
    }

    public function search(Request $rq)
    {
        $products = $this->productRepo->search($rq->search);
        return response()->json($products);
    }
    public function test(){

        $products = $this->productRepo->topProduct(1,'ratings');
        return $products;

  
        
    }
}
