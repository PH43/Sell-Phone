<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;

use App\Models\category;
use App\Models\comment;
use App\Models\image;
use App\Models\product;
use App\Repositories\HomeRepositoryInterface;

use Illuminate\Http\Request;

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
        comment::truncate();
    }
}
