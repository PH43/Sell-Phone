<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Repositories\AddressRepositoryInterface;
use App\Repositories\CartRepositoryInterface;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $cartRepo;
    protected $addressRepo;

    public function __construct(CartRepositoryInterface $cartRepo, AddressRepositoryInterface $addressRepo)
    {

        $this->cartRepo = $cartRepo;
        $this->addressRepo = $addressRepo;
    }

    public function showCart()
    {
        $cart = Session::all();
        $province = $this->addressRepo->province();

        return view('content/body/cart', compact('cart', 'province'));
    }

    public function addToCart($id)
    {
        $this->cartRepo->addToCart($id);
        $cart = session('cart');
        return response()->json($cart);
    }
    public function deleteCart($id)
    {
        $cart =   $this->cartRepo->deleteCart($id);
        return response()->json($cart);
    }
    public function updateCart($id, $qty)
    {

        $this->cartRepo->updateCart($id, $qty);
        $cart = Session::all();
        return response()->json($cart);
    }
}
