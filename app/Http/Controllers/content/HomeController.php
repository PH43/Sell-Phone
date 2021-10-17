<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\order_detail;
use App\Models\product;
use App\Models\rating;
use App\Repositories\HomeRepositoryInterface;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


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

        $products['buyLot'] = $this->productRepo->topProduct(1, 'order_details');
        $products['rating'] = $this->productRepo->topProduct(1, 'ratings');
        //dd($products);
        return view('content/body/body', compact('products'));
    }
    public function productCategory($id)
    {
        $products = $this->productRepo->productCategory($id);

        return  response()->json($products);
    }

    public function topProduct($id, $table)
    {
        $products = $this->productRepo->topProduct($id, $table);

        return  response()->json($products);
    }

    public function search(Request $rq)
    {
        $products = $this->productRepo->search($rq->search);
        return response()->json($products);
    }
    public function test(Request $rq)
    {

        $param = $rq->param;
        $id = $rq->id;
        DB::enableQueryLog();

            product::orWhere('name', 'LIKE', "%{$param}%")
            ->orWhere('price', 'LIKE', "%{$param}%")
            ->orWhereHas('categories', function ($q) use ($param) {
                $q->where('name', 'LIKE', "%{$param}%");
            })->where('category_id', $id)
            ->get()->toArray();
        dd(DB::getQueryLog());
    }
}
