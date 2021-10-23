<?php

namespace App\Repositories;

use App\Mail\WelcomeMail;
use App\Models\order;
use App\Models\order_detail;
use App\Models\order_information;
use App\Models\product;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;


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
            if (!isset($info['message'])) {
                $info['message'] = null;
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
            return $info;
        } catch (Exception $ex) {
            DB::rollback();
            return 0;
        }
    }

    public function checkQtyProduct()
    {
        $cart = session()->all();
        foreach ($cart['cart'] as $cart) {
            $product = product::find($cart['id']);
            if ($cart['qty'] > $product->quantity) {

                return $cart['name'];
           
            }
        }
    }
    public function updateQtyProduct()
    {
        $cart = session()->all();
        foreach ($cart['cart'] as $cart) {
            $product = product::find($cart['id']);
            $product->quantity = $product->quantity - $cart['qty'];
            $product->save();
        }
    }
    public function sendMail($info)
    {
        $address =  $info['provinces'] . ',' . $info['districts'] . ',' . $info['wards'] . ',' . $info['addressDetails'];

        $mailInfo = [
            'name' => $info['customer_name'],
            'phone' =>  $info['numberphone'],
            'email' =>  $info['email'],
            'address' => $address,
        ];
        $email =  $info['email'];

        Mail::to($email)->send(new WelcomeMail($mailInfo));
    }
}
