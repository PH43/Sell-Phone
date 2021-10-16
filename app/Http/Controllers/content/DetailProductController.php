<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Http\Requests\ratingRequest;
use App\Models\category;

use App\Repositories\CommentRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;


class DetailProductController extends Controller
{
    protected $productRepo;
    protected $commentRepo;
    public function __construct(ProductRepositoryInterface $productRepo, CommentRepositoryInterface $commentRepo)
    {

        $this->productRepo = $productRepo;
        $this->commentRepo = $commentRepo;
    }

    public function detailProduct($id)
    {



        $data['product'] =    $this->productRepo->detailProduct($id);
//dd($data);
        

        $data['relatedProduct'] = $this->productRepo->relatedProduct($data['product'][0]['name'], $data['product'][0]['id'],$data['product'][0]['category_id']);

        $data['comment'] = $this->commentRepo->listComment('product_id', $data['product'][0]['id'], 1, 5);

        $data['rating'] =   $this->commentRepo->liststar($id);

        if ($data['product'][0]['quantity'] >= 1) {
            $data['status'] = 'Còn hàng';
        } else {
            $data['status'] = 'Hết hàng';
        }
//dd($data);
        return  view('content/body/detailproduct', compact('data'));
    }

    public function insertComment(Request $rq)
    {


        if ($rq->has('parents_id')) {
            $parents_id = $rq->has('parents_id');
        } else {
            $parents_id = null;
        }
        $this->commentRepo->insertComment($rq->user_id,  $rq->product_id, $rq->content);
        return  response()->json();
    }


    public function loadMoreComments($productId, $page)
    {

        $comments = $this->commentRepo->listComment('product_id', $productId, null, ($page * 5));

        return response()->json($comments);
    }
    public function replyComment($cmtId)
    {

        $comments = $this->commentRepo->listComment('parents_id', $cmtId, null, null);

        return response()->json($comments);
    }

    public function rate(Request $rq)
    {
        $this->validate($rq, [
            'name' => 'required|min:6|max:24',
            'email' => 'required|email'
        ]);
        $this->commentRepo->rate($rq->all());
        return redirect()->back()->with(['message' => 'Đánh giá thành công']);
    }
}
