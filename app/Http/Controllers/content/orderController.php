<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Repositories\AddressRepositoryInterface;
use App\Repositories\OrderRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class orderController extends Controller
{
    protected $orderRepo;
    protected $addressRepo;
    public function __construct(OrderRepositoryInterface $orderRepo, AddressRepositoryInterface $addressRepo)
    {
        $this->orderRepo = $orderRepo;
        $this->addressRepo = $addressRepo;
    }
    public function order(Request $rq)

    {

  

        if ($this->orderRepo->checkQtyProduct() > 0) {
            $product = product::find($this->orderRepo->checkQtyProduct());
            $message = $product['name'] . 'Không đủ số lượng sản phẩm';
        } else {
            $this->orderRepo->updateQtyProduct();
            $info =  $this->orderRepo->order($rq->all());
            $this->orderRepo->sendMail($info);
            session()->pull('cart', 'default');
            return $message = 1;
        }

        return response()->json($message);
    }

    public function dictrict($id)
    {
        $address = $this->addressRepo->dictrict($id);
        return response()->json($address);
    }

    public function ward($id)
    {
        $address = $this->addressRepo->ward($id);
        return response()->json($address);
    }
}
