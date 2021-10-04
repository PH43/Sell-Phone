<?php 
namespace App\Repositories;
interface CommentRepositoryInterface
{
    public function listComment($colum,$id ,$type,$page,);
    public function insertComment($user_id,$product_id,$content,$parents_id);
}

?>