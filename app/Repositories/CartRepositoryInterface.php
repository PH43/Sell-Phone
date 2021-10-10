<?php 
namespace App\Repositories;
use Illuminate\Http\Request;
interface CartRepositoryInterface

{
    public function addToCart($id);
    public function deleteCart($id);
    public function updateCart($id,$qty);
}
?>