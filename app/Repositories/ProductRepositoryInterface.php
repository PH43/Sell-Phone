<?php 
namespace App\Repositories;

interface ProductRepositoryInterface 
{

public function detailProduct($id);
public function relatedProduct($name,$id );
public function filterProduct($param);
public function categoryProduct($category_id,$brand_id);
}
?>