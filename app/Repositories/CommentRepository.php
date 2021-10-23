<?php

namespace App\Repositories;

use App\Models\comment;
use App\Models\rating;
use Illuminate\Support\Facades\DB;

class CommentRepository implements CommentRepositoryInterface
{

    public function insertComment($user_id, $product_id, $content, )
    {
        comment::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
            'content' => $content,
           
        ]);
    }
    public function listComment($colum, $id, $type, $page,)
    {
        $comment['data'] =  comment::with('user')->where("$colum", $id);

     

        $comment['count'] = $comment['data']->count();

        if (!empty($page)) {

            $comment['data']  = $comment['data']->take($page);
        }

        $comment['data'] = $comment['data']->orderBy('id', 'desc')->get()->toArray();
        return $comment;
    }

    public function rate($param){
        rating::create(['name' => $param['name'],
                         'email' => $param['email'] ,
                         'star' => $param['star'] ,
                         'product_id' => $param['product_id'] ]);

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
   

       $star['biggest'] = DB::table('ratings')->selectRaw('count(*) as count,star')
       ->where('product_id', $id)
       ->groupBy('star')
       ->orderBy('count','desc')->first();
      
   return  $star;
 

    }
}
