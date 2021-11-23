<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\category;
use App\Models\comment;
use App\Models\order;
use App\Models\order_detail;
use App\Models\order_information;
use App\Models\product;
use App\Models\rating;
use App\Repositories\HomeRepositoryInterface;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('content/body/home', compact('products'));
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
        $numbers = array( 3, 4, 2, 1, 5);
        $count = count($numbers);
  for($i = 0; $i < $count ;$i++){
    //  echo $i;
      for($j = $i + 1; $j < $count ;$j++){
      //  echo $j;
        if($numbers[$i] > ($numbers[$j] + 1)){
           
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $temp;
            
            
        } 
    //    echo $temp = $numbers[$i];
      }
   
  }      
  print_r($numbers);
  for ($i = 0; $i < $count; $i++){
    echo $numbers[$i] . ' ';
}

    
    }

}
