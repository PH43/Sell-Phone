<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\category;

use App\Repositories\CommentRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\rating;

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

        $data['relatedProduct'] = $this->productRepo->relatedProduct($data['product'][0]['name'], $data['product'][0]['id'], $data['product'][0]['category_id']);

        $data['comment'] = $this->commentRepo->listComment($data['product'][0]['id'],  5);

        $data['rating'] =   $this->commentRepo->liststar($id);

        if ($data['product'][0]['quantity'] >= 1) {
            
            $data['status'] = 'Còn hàng';
        } else {
            $data['status'] = 'Hết hàng';
        }
         // dd($data['rating']);
        return  view('content/body/detailproduct', compact('data'));
    }

    public function insertComment(Request $rq)
    {
        
        $this->commentRepo->insertComment($rq->all());
  
        return  response()->json();
    }


    public function loadMoreComments($productId, $page)
    {

        $comments = $this->commentRepo->listComment( $productId, ($page * 5));

        return response()->json($comments);
    }
    public function replyComment($cmtId)
    {

        $comments = $this->commentRepo->listComment('parents_id', $cmtId, null, null);

        return response()->json($comments);
    }

    public function rate(Request $rq)
    {
    
         $this->commentRepo->evaluate($rq->all());      
        $data =   $this->commentRepo->liststar($rq->product_id);

        return response()->json($data);
    }
}
