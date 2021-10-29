<?php 
namespace App\Repositories;
interface CommentRepositoryInterface
{
    public function listComment($id ,$page,);
    public function insertComment($param);
    public function evaluate($param);
    public function liststar($id);
    public function check($email,$id);
}

?>