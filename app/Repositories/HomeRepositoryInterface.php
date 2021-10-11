<?php 
namespace App\Repositories;
interface HomeRepositoryInterface
{
    public function search($search);
    public function productCategory($id);
 
    public function topProduct($id,$table);
}
    ?>