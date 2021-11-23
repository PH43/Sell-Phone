<?php

namespace App\Repositories;

use App\Models\comment;
use App\Models\rating;
use Illuminate\Support\Facades\DB;

class CommentRepository implements CommentRepositoryInterface
{

    public function insertComment($param)
    {   
    if(isset($param['user_id'])){
        $user_id = $param['user_id'];
    }else{
        $user_id = null;
    }
        comment::create([
            'user_id' => $user_id,
            'product_id' => $param['product_id'],
            'content' => $param['content'],
           
        ]);
    }
    public function listComment( $id, $page,)
    {
        $comment['data'] =  comment::with('user')->where("product_id", $id);


        $comment['count'] = $comment['data']->count();

        if (!empty($page)) {

            $comment['data']  = $comment['data']->take($page);
        }

        $comment['data'] = $comment['data']->orderBy('id', 'desc')->get()->toArray();
        return $comment;
    }

    public function evaluate($param){
    
      if(isset($param['user_id'])){
          $user_id = $param['user_id'];
      }else{
          $user_id = null;
      }
        rating::insert( 
        ['name' => $param['name'],
        'email' => $param['email'] ,
        'star' => $param['star'] ,
        'product_id' => $param['product_id'] ,
        'user_id' => $user_id
    ]);
   
                         

    }

    public function check($email,$id){
        $product =  rating::where('email', "$email")->where('product_id',"$id")->get()->toArray();
        if($product == null) {
            return 1;
        }
    }
    public function liststar($id){
      $star['count'] =    rating::where('product_id', $id)->count();
   
        for($i=1; $i<= 5;$i++){
            $star[$i] = rating::where('product_id', $id)->where('star', $i)->count();
            if($star[$i] > 0){
                $star['rating'][$i] = [
                     'name' => $i ,
                     'ratio' =>  $star[$i] /  $star['count']  * 100,];
            }else{
                $star['rating'][$i] = [
                    'name' => $i ,
                    'ratio' =>  0,];
            }
           
        } 
        $total = 0;
        for($i = 1; $i <=5 ; $i++){
            $total += ($i * $star[$i]);
        }
     
        if($star['count'] >= 1){
            $star['biggest'] =   round($total/$star['count']); 
        }else{
            $star['biggest'] = 1;
        }   
    
    
   return  $star;
 

    }
}
