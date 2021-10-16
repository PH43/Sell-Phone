<?php 
namespace App\Repositories;

interface ProductRepositoryInterface 
{

public function detailProduct($id);
public function relatedProduct($name,$id,$category_id );
public function filterProduct($param);

}
?>