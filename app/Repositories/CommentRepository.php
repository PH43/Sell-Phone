<?php

namespace App\Repositories;

use App\Models\comment;

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
}
