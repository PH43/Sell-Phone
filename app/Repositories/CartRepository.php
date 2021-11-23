<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Session;

class CartRepository implements CartRepositoryInterface 
{
public function addToCart($id ){
     $product = product::with('image')->find($id);

     $cart = session('cart');
     if($cart[$id] ){
        if($cart[$id]['qty'] < 10 ){
          $cart[$id]['qty'] = $cart[$id]['qty'] + 1;
        }
      
     }else{
        $cart[$id] = [
        'id' => $product->id,
        'name' => $product->name ,
        'price' => $product->price ,
        'image' => $product->image->url,
        'qty' => 1

];
     }
   
    session()->put('cart' , $cart);

   return $cart = Session::all();

}
public function deleteCart($id){
  $cart = session('cart');
  unset($cart[$id]);
  session()->put('cart', $cart);
  return $cart = Session::all();
}
public function updateCart($id,$qty){

  $cart = session('cart');
  $cart[$id]['qty'] =  (int)$qty;
  session()->put('cart' , $cart);

}

}
