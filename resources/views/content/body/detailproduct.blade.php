@extends('content/template/template')
@section('body')
    <style>
        body {
            background-color: white;
        }

        .body {
            margin-top: 50px;
            width: 96%;
            margin-left: 2%;
            height: 700px;
            background-color: white;

        }

        .body div {
            float: left;
        }

        .display-product {

            border: 1px solid #b3b3b3;
            width: 45%;
            text-align: center;
            height: 100%;
            position: relative;


        }

        .display-product img {
            margin-top: 15%;
            width: 70%;
            object-fit: cover;
            transition: all 0.5s;

        }

        .display-product img:hover {

            width: 80%;

        }

        .detail-product {
            width: 50%;
            margin-left: 5%;
            height: auto;
            margin-top: 40px;

        }

        .detail-product span {
            padding: 8px 0px;
        }

        .categories-product {
            color: #2c2c2c;
            display: block;


        }

        .categories-product span {
            display: block;
        }

        .name-product {
            font-size: 28px;
            display: block;
        }

   
        .avaluate {
            color: darkgray;
        }

        .price-product {
            display: block;
            font-size: 22px;
        }

        .card-product {
            margin-top: 20px;
        }

        .card-product a {
            text-decoration: none;
            color: black;
        }

        .card-add {
            color: white;
            background-color: #2c2c2c;
            padding-left: 20px;
            padding-right: 20px;
        }

        .card-quantity a {

            margin: 0px;
            font-size: 20px;
            padding: 10px 18px;
            border: 1px solid #686868;



        }


        .card-product div {
            float: left;
            margin-right: 10px;
        }

        .card-infoDetail {
            width: 100%;
            text-align: left;
            margin-top: 50px;
        }

        .card-infoDetail span {
            display: block;
            line-height: 1px;
        }

        .card-infoDetail h5 {
            line-height: 60px;
        }

        .Share {
            margin-top: 40px;
            width: 90%;
        }

        .Share span {
            display: block;


            padding: 20px 10px;
            border: 1px solid rgb(100, 100, 100);
        }

        .Share span i {
            padding: 0px 10px;
        }

        .relatedProduct {
            width: 96%;
            clear: both;
            height: auto;
            margin-left: 2%;
            background-color: white;
            padding-bottom: 30px;
            border-radius: 10px;
            border: 1px solid #eeeeee;


        }

        .showdetails-product {
            width: calc(20% - 20px);
            margin-left: 15px;
            height: auto;
            position: relative;
            display: inline-block;
            text-align: center;
        }

        .showdetails-product img {
            width: 100%;
        }

        .show-product {
            width: 100%;
            padding-top: 25px;
            height: 330px;

            border: 1px solid rgb(204, 204, 204);
        }

        .show-product:hover .acctionWith-product {
            opacity: 1;
        }

        .acctionWith-product {

            width: 100%;
            transition: all 0.7s;
            opacity: 0;
            position: absolute;
            transform: translateY(-50px);


        }

        .acctionWith-product i {
            margin-left: 5px;
            padding: 13px 13px;
            background-color: #bdab98;

        }

        .acctionWith-product i:hover {
            background-color: #c27b43;
        }

        .info-product span {
            text-align: left;
            margin-top: 5px;
            display: block;
        }

        .relatedProduct h5 {
            text-align: center;
            font-size: 26px;
            padding: 30px;
            font-weight: 700;
            color: rgb(245, 16, 16);
        }

        .comment {
            clear: both;
            transform: translateY(-120px);
            width: 96%;
            margin-left: 2%;
            background-color: white;
            height: auto;
            padding: 20px 20px;
            border-radius: 10px;
            border: 1px solid #eeeeee;
        }

        .info-comment {
            width: 100%;

        }

        .info-comment h5 {
            float: left;
        }


        .enter-comment {
            margin-top: 40px;
            clear: both;
            width: 100%;
        }

        .enter-comment form {
            float: right;
            width: 95%;
            margin-top: 5px;

        }

        .enter-comment input[type="text"] {
            height: 50px;
            width: 90%;
            margin-left: 1%;
            border-radius: 10px;
        }

        .enter-comment input[type="submit"] {
            height: 50px;
            ;
            width: 60px;
            border: 0px;
            background-color: orange;
            border-radius: 5px;
        }

        .enter-comment img {
            width: 60px;
            height: 60px;
            border-radius: 100%;
        }

        .show-comment {
            width: 100%;
            height: auto;
            clear: both;
            margin-top: 50px;
        }

        .get-comment {
            width: 100%;

            padding: 20px 0px;
            border-top: 1px solid darkgray;
            margin-bottom: 40px;
        }

        .get-comment img {
            float: left;
        }

        .user-comment {
          
            width: 65%;
      

        transform: translateX(20px);
        }
        .user-comment h5 {
            margin-right: 20px;

        }

        .user-comment span {
            opacity: 0.7;
        }

        .user-comment label {
            margin-top: 10px;
            display: block;
            width: 100%;

        }

        .user-reply {

    width: 65%;
    transform: translateX(20px);
}
.user-reply  h5{
    margin-right: 20px;
}

.user-reply  span {
            opacity: 0.7;
        }

        .user-reply  label {
            margin-top: 10px;
            display: block;
            width: 100%;
            margin-bottom: 40px;

        }
        .impact-comment {
            width: 100%;
            margin-top: 10px;
            text-align: right;
     
        }

        .impact-comment a {
            margin-right: 60px;
            font-size: 16px;
            text-decoration: none;
            color: #999999;
        }

        .mid {
            padding: 50px 0px;
            width: 100%;
            height: #f8f9fa;
        }
.loadMore {
    width: 100%;
    min-height: 40px;
    text-align: center;
    margin-top: 20px;
}
.loadMore a{
    border: 1px solid rgb(170, 170, 170);
    text-decoration: none;
    color: black;
    padding: 5px 10px;

}
.reply-comment{
    display: none;
}
.rate-product{
                width: 96%;
                margin-left: 2%;
                margin-top: 3%;
                height: auto;
                background-color:white;
                border-radius: 10px;
                padding: 100px

            }
            .rate-product div{

                width: 32%;
                text-align: center;
             display: inline-block;;
           
            }
            .rate-info label{
                display: block;
            }
            .rate-product div h5{
                font-weight: bold;
                font-size: 20px;
           color:#212529;
           padding: 16px 0px;
                line-height: 28px;
                font-family: roboto, arial, helvetica;
            }
            .rate-info p{
                color: #495057;

            } .rate-info h1{
                font-size: 44px;
                color: #cb1c22;
                font-weight: 600;
                line-height: 60px;
            }
            .rate-info span{
                color:#99a2aa;
            }
.rate-chart {
    float: right;
   
}
.rate-chart   i{
    font-size: 25px;
    line-height: 60px;

}


.rate-chart input{

margin-bottom: 2%;
    display: block;
    margin-left: 5%;
    width: 90%;
    height: 40px;
    margin-top: 1%;
}
.rate-request{
    float: right;
    
}
.rating div{
        float: left;
        
    }
    </style>
    @if(isset($data['rating']['biggest']->star))
    @php $star = $data['rating']['biggest']->star @endphp
    @else
    @php $star = 1 @endphp
    @endif
    <div class="body">
        <div class="display-product">
            <img src="{{ asset('/images/productImages/' . $data['product'][0]['image']['url']) }}" alt="">
        </div>
        <div class="detail-product">
            <span class="categories-product"> {{ $data['categoryBrand'][0]['name'] }} /
                {{ $data['categoryBrand'][0]['brands'][0]['name'] }} </span>
            <span class="name-product">{{ $data['product']['0']['name'] }}</span>
            <span class="avaluate"> @for($i = 1; $i <= 5; $i++) <i  @if( $i <= $star ) style="color:#ea9d02 ;" @endif class="fas fa-star"></i> @endfor  <span> {{$data['rating']['count']}} bài
                    đánh giá</span></span>
            <span class="price-product">
                {{ $data['product']['0']['price'] }} $
            </span>

            <div class="card-product">
                <div class="card-quantity">

                    <a href="" style="color:white;background-color: #2c2c2c;   padding-left: 100px;
            padding-right: 100px;" 
            class="addToCart"
            
            data-url="{{ route('addToCart', $data['product'][0]['id']) }}"
            >ADD TO CART</a>
                
                </div>

                <div class="card-infoDetail">
                    <span>Tình trạng: {{ $data['status'] }}</span>
                    <div class="card-info">
                        <h5>Mô tả sản phẩm</h5>
                        <p>
                            {{ $data['product']['0']['description'] }}
                        </p>
                    </div>
                </div>

                <div class="Share">
                    <span>Share on <i class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> <i
                            class="fab fa-instagram"></i></span>
                </div>


            </div>
        </div>

        <div style="width: 100%; height:40px;border-bottom: 1px solid #eeeeee;">

        </div>

    </div>

    <div style="background-color: #f8f9fa; clear: both;" class="mid">

        <div class="relatedProduct">
            <h5>Related Products!</h5>
            @foreach ($data['relatedProduct'] as $product)
                <div class="showdetails-product">
                    <div class="show-product">
                        <div class="image-product">
                            <img src="{{ asset('/images/productImages/' . $product['image']['url']) }}" alt="">
                        </div>

                        <div class="acctionWith-product">
                            <i class="fas fa-shopping-cart"></i>
                            <i class="fas fa-search-plus"></i>
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                    .
                    <div class="info-product">
                        <span> {{ $product['name'] }}</span>
                        </span>
                        <span> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                        <span>$ 500</span>
                    </div>
                </div>
            @endforeach
        </div>
     

<div class="rate-product" >
<div class="rate-info">
<h5>Đánh giá & Nhận xét {{ $product['name'] }}</h5>
<p>Đánh Giá Trung Bình</p>

<h1>{{$star}} /5</h1>
<label for=""> @for($i=1;$i<=5;$i++) <i @if( $i <= $star ) style="color:#ea9d02 ;" @endif class="fas fa-star"></i> @endfor </label>
<span>{{$data['rating']['count']}} đánh giá</span>

</div>

<div class="rate-request">
    <h5>Đánh giá của khách hàng</h5>
   <div class="rating" style="width: 90%;;height: 400px;margin-top: 20px;text-align: left;margin-left: 5%">
 @foreach ($data['rating']['rating']  as $rating )
   
    
  <div style="width: 100%;margin-bottom: 1%;">
    <div style="width:15%">
        <label for="">{{$rating['name']}}  Sao</label>
       </div>
       <div style="width: 85%">
        <div style="width:@if(isset($rating['ratio'])) {{$rating['ratio']}}% @else 1%  @endif ;height: 20px;background-color: red;"></div>
       </div>
  </div>
  @endforeach  
   </div>
    </div>
  
<div class="rate-chart">

    <span style="position: absolute;transform: translateX(-190px);color: red;padding-top: 50px ">
        @if(isset($message)) {{$message}} @endif</span>
   
    <h5 >Bạn chấm sản phẩm này bao nhiêu sao?</h5>

    

    <form action="{{ route('rate') }}" method="post" id="rate-user">
        @csrf
        @for($i=1;$i<=5;$i++) <i id="star-{{$i}}" @if($i < 2) style="color:#ea9d02;" @endif  data-star="{{$i}}" class="star fas fa-star"></i> @endfor 
        <input type="hidden" name="star" id="star" value="1">
        <input type="hidden" name="product_id" value="{{$data['product']['0']['id']}}">
        <input  type="text" placeholder="Họ Và Tên" name="name">
        @error('name')
        <span style="text-align: center;color: red;">{{$message}}</span>
    @enderror
        <input   type="text" placeholder="Email"  name="email">
        @error('email')
        <span style="transform: translateY();text-align: center;color: red;">{{$message}}</span>
    @enderror
        <input type="submit" href="" id="rate-product" class="btn btn-danger">
    </form>
</div>

</div>


        <div class="comment">

            <div class="info-comment">

                <h5>136 Bình luận</h5>
              
                <div class="enter-comment">
                    <img src="{{ asset('../public/images/avatar-profile.png') }}" alt="">
                    <form id="formComment" method="post" action="{{ route('product-comment') }}">
                        @csrf
                        <input type="text" name="content" id="content">
         
                        <input type="hidden" name="product_id" id="productId" data-name="" value="{{ $data['product'][0]['id'] }}">
                        @if (isset(Auth::user()->id))
                            <input type="hidden" name="user_id" id="userId" data-name="{{ Auth::user()->name }}" value="{{ Auth::user()->id }}">

                        @endif

                        <input type="submit" id="commentproduct">
                    </form>

                    <div class="show-comment">


                        @foreach ($data['comment']['data'] as $comment)
                            <div class="get-comment"  >
                          
                                <img src="{{ asset('/images/avatar-profile.png') }}" alt="">
                                <div class="user-comment" >
                                    <h5>{{ $comment['user']['name'] }}</h5>
                                    <span><i class="fas fa-clock"></i>   {{ $comment['created_at'] }}</span> <span><i></i></span>
                                    <label >
                                        {{ $comment['content'] }}
                                    </label>

                            
                                </div>
                                <div class="impact-comment" style="float:right">
                                    <a href=""><i class="fas fa-thumbs-up"></i> 0</a>
                                    <a href="" id="reply-comment" data-reply="{{ $comment['id'] }}" data-url="{{ route('reply-comment', $comment['id'] ) }}" ><i class="fas fa-reply"></i> Trả lời</a>
                                    <a href=""><i class="fas fa-flag"></i> Báo xấu</a>
                                </div>
                          
                            </div>
                         
                         
                        @endforeach
                            



                    </div>


     
            
                    <div class="loadMore">
                        @for ($i = 2; $i <= ceil($data['comment']['count']/5); $i++ )
                       
                        <a href=""  data-id="{{$i}}" id="page-{{ $i }}" class="addProduct" @if ($i > 2)
                            style="display: none;"
                        @endif 
                        data-page="{{ route('load-comment', [ 'productId' => $data['product'][0]['id'] 
                          ,'page' => $i]) }}">  Load More  </a> 
                       
                           
                        
                            
                        @endfor
      
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>



        $(".star").hover(function(){
            var star =    $(this).data('star');
    
            for(let i = 2; i <= star ; i++  ){
            
               $("#star-"+i).css("color","#ea9d02");    
            }
        },function(){
            var star =    $(this).data('star');
            for(let i = 2; i <= star ; i++  ){
            
                $("#star-"+i).css("color","#212529");    
            }
        });
        $(".star").click(function(){
            var star =    $(this).data('star');
            $("#star").val(star);
            for(let i = 2; i <= star ; i++  ){
            
               $("#star-"+i).css("color","#ea9d02");    
            }
        });
       
    </script>
    <script>
        $(document).on('click', '#commentproduct', function(e) {

            e.preventDefault();
    
      
           var userId = $('#userId').val();
           var productId = $('#productId').val();
           var token = $('input[name=_token]').val();
            var name =  $('#userId').data('name');
            var content = $('#content').val();

            if (typeof userId == 'undefined') {
                alert('Bạn chưa đăng nhập');
            }

            if (content == '') {
                alert('not null');
            } else {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('product-comment') }}",
                    data: {
                        'content': content,
                        'user_id':userId,
                        'product_id': productId,
                        '_token': token,
                        
                    },
                  
                    success: function(data) {
                        console.log(1);
                        var comment = '';
                        comment += '<div class="get-comment">' +
                            '  <img src="{{ asset('/images/avatar-profile.png') }}" alt="">' +
                            '  <div class="user-comment">' +
                                    '<h5>' + name + '</h5>' +
                                  '  <span><i class="fas fa-clock"></i>   '+ new Date($.now()) +'  </span> <span><i></i></span>' + 
                                   ' <label>  ' + content + ' </label>' +
                              ' </div>' +
                               '<div class="impact-comment" style="float:right">' +
                                  '  <a href=""><i class="fas fa-thumbs-up"></i> 0</a>' +
                                   ' <a href="" ><i class="fas fa-reply"></i> Trả lời</a>' +
                                   ' <a href=""><i class="fas fa-flag"></i> Báo xấu</a>' +
                              '  </div></div>' 
                           
                  

                    


          
                            $('.show-comment').prepend(comment);
                         
                          
                            }
                });
            }

        });
    </script>


<script>
    // load more
$(document).on('click','.addProduct', function(e){
    e.preventDefault();
 var page = $(this).data('page');
 var page_id = $(this).data('id');


    $.ajax({
        type: "get",
        url: page,
        dataType: 'json',
    
        success: function(data) {
            var comment = '';
            $.each(data.data, function(key, data){
                console.log(data);
                comment += '<div class="get-comment">' +
                        
                    '  <img src="{{ asset('/images/avatar-profile.png') }}" alt="">' +
                    '  <div class="user-comment">' +
                            '<h5>' + data.user.name + '</h5>' +
            '<span><i class="fas fa-clock"></i>'+ data.updated_at +'</span> <span><i></i></span>' + 
                           ' <label>  ' + data.content + ' </label>' +
                         ' </div>' +
                          '<div class="impact-comment" style="float:right">' +
                     '  <a href=""><i class="fas fa-thumbs-up"></i> 0</a>' +
                            ' <a href=""><i class="fas fa-reply"></i> Trả lời</a>' +
                                   ' <a href=""><i class="fas fa-flag"></i> Báo xấu</a>' +
                      '  </div></div>' 
            });
                     
                       
                  $('#page-'+ page_id).hide();
          
                  $('#page-'+ (page_id + 1)).show();
                  
                              $('.show-comment').html(comment);
                            }
    });
});

</script>


@endsection
