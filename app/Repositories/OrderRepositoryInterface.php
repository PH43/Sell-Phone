<?php
namespace App\Repositories;
interface OrderRepositoryInterface {
    public function order($info);
    public function checkQtyProduct();
    public function updateQtyProduct();
}

?>