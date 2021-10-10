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


        $products = $this->productRepo->productCategory(1);
      
        return view('content/body/body', compact('products'));
    }
    public function productCategory($id)
    {
        $products = $this->productRepo->productCategory($id);

        return  response()->json($products);
    }

    public function search(Request $rq)
    {
        $products = $this->productRepo->search($rq->search);
        return response()->json($products);
    }
    public function test(){

        $cart = session()->all();
        //return $cart;
        foreach ($cart['cart'] as $cart) {
            $product[$cart['id']] = product::where('id', ($cart['id']))->get()->toArray();
        }
        $carts = session()->all();
        foreach ($product as $pro) {
            $product = product::find($pro[0]['id']);
            $product->quantity = $pro[0]['quantity'] - $carts['cart'][$pro[0]['id']]['qty'];
            $product->save();
            }
        
    }
}
