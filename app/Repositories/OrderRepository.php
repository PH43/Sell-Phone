<?php

namespace App\Repositories;

use App\Models\order;
use App\Models\order_detail;
use App\Models\order_information;
use App\Models\product;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\Print_;

class orderRepository implements OrderRepositoryInterface
{
    public function order($info)
    {
        DB::beginTransaction();
        try {
            $address = $info['addressDetails'] . ',' . $info['wards'] . ',' . $info['districts'] . ',' . $info['provinces'];
            if (!isset($info['user_id'])) {
                $info['user_id'] = null;
            }


            $order =  order::create([
                'time' =>   Carbon::now(),
                'message' => $info['message'],
                'user_id' => $info['user_id'],
                'status'   => 0,
                'payment_method' => 1

            ]);

            order_information::create([
                'customer_name' => $info['customer_name'],
                'address' => $address,
                'email' => $info['email'],
                'number_phone' => $info['numberphone'],

                'order_id' => $order->id

            ]);
            $cart = session('cart');
            foreach ($cart as $cart) {
                $total = $cart['qty'] * $cart['price'];
                order_detail::create([
                    'product_id' => $cart['id'],
                    'quantity' => $cart['qty'],
                    'price' => $total,
                    'order_id' => $order->id
                ]);
            }
            DB::commit();
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->back();
        }


        return $info;
    }

    public function checkQtyProduct()
    {
        $cart = session()->all();
        foreach ($cart['cart'] as $cart) {
            $product[$cart['id']] = product::where('id', $cart['id'])->get()->toArray();
            if ($cart['qty'] > $product[$cart['id']][0]['quantity']) {
                return $cart['id'];
            }
        }
    }
    public function updateQtyProduct()
    {
        $cart = session()->all();
        foreach ($cart['cart'] as $cart) {
            $product[$cart['id']] = product::find($cart['id']);
            $product[$cart['id']]->quantity = $product[$cart['id']]->quantity - $cart['qty'];
            $product[$cart['id']]->save();
        }
    }
    public function sendMail($info)
    {

        Mail::send('content/body/order', ['info' => $info], function ($message) use ($info) {
            $message->from('duy0111111@gmail.com', 'Mua hàng1');
            $message->to('duy654916@gmail.com', $info['customer_name']);
            $message->subject('Thông tin mua hàng');
        });
    }
}
