<?php

namespace App\Repositories;

use App\Models\comment;

class CommentRepository implements CommentRepositoryInterface
{

    public function insertComment($user_id, $product_id, $content, $parents_id)
    {
        comment::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
            'content' => $content,
            'parents_id' => $parents_id
        ]);
    }
    public function listComment($colum, $id, $type, $page,)
    {
        $comment['data'] =  comment::with('user')->where("$colum", $id);

        if (!empty($type)) {

            $comment['data']  = $comment['data']->where("parents_id", null);
        }

        $comment['count'] = $comment['data']->count();

        if (!empty($page)) {

            $comment['data']  = $comment['data']->take($page);
        }

        $comment['data'] = $comment['data']->orderBy('id', 'asc')->get()->toArray();
        return $comment;
    }
}
