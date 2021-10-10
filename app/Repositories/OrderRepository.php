<?php

namespace App\Repositories;

use App\Models\order;
use App\Models\order_detail;
use App\Models\order_information;
use App\Models\product;
use Carbon\Carbon;
use PhpParser\Node\Expr\Print_;

class orderRepository implements OrderRepositoryInterface
{
    public function order($info)
    {

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
        session()->pull('cart', 'default');
    }

    public function checkQtyProduct()
    {
        $cart = session()->all();
        foreach ($cart['cart'] as $c) {
            $product[$c['id']] = product::where('id', ($c['id']))->get()->toArray();
        }
        foreach ($product as $pro) {
            if ($pro[0]['quantity']  <  $cart['cart'][$pro[0]['id']]['qty']) {
                return $pro[0]['id'];
            }
        }
    }
    public function updateQtyProduct()
    {
        $cart = session()->all();
        foreach ($cart['cart'] as $c) {
            $product[$c['id']] = product::where('id', ($c['id']))->get()->toArray();
        }
        foreach ($product as $pro) {
            $product = product::find($pro[0]['id']);
            $product->quantity = $pro[0]['quantity'] - $cart['cart'][$pro[0]['id']]['qty'];
            $product->save();
        }
    }
}
