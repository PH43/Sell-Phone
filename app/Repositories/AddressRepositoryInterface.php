<?php 
namespace App\Repositories;
interface AddressRepositoryInterface{
    public function province();

    public function dictrict($id);

    
    public function ward($id);
    
}

?>