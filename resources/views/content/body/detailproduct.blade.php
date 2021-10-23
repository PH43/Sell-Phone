@extends('content/template/template')
@section('tittle')
    Chi tiết sản phẩm
@endsection
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

     
        .relatedProduct h5 {
            text-align: center;
            font-size: 26px;
            padding: 30px;
            font-weight: 700;
            color: rgb(245, 16, 16);
        }

        .comment {
            clear: both;
            transform: translateY(-40px);
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
            padding: 100px 0px;
            width: 100%;
         
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
    border: 1px solid #eeeeee;
                width: 96%;
                margin-left: 2%;
                margin-top: 3%;
                height: 500px;
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
    .product-info {

--columns: 6;
width: calc(calc(100% / var(--columns)) - 10px);

display: inline-block;
margin-top: 50px;



}

.product-info img {
width: 84%;
margin-left: 8%;
height: 210px;
height: cover;


}

.product-name span {
font-size: 16px;
letter-spacing: 0.24px;
-webkit-line-clamp: 1;
-webkit-box-orient: vertical;
overflow: hidden;
display: -webkit-box;


}

.product-price span {
display: inline;

font-weight: 700;
}

.add {
background-color: black;
width: 100%;
position: absolute;

opacity: 0;
transition: all 0.5s;
}
.add-cart{
position: relative;
width: 100%;
height: auto;
}

.add a {
color: white;
transform: translateY(-10px);
}

.product-info:hover .add {
transform: translateY(-40px);
opacity: 1;
}

.product-info:hover {
border: 1px solid black;
}

.categories-show h5 {
font-size: 20px;
font-weight: 600;
letter-spacing: 1px;
font-family: Montserrat;
}
.show-ratio{
    height: 20px;background-color: red;
}
label.error{
    color: red;
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
            <span class="categories-product"> {{ $data['product'][0]['categories']['name'] }} /
                {{ $data['product'][0]['brands']['name'] }} </span>

            <span class="name-product">{{ $data['product'][0]['name'] }}</span>

            <span class="avaluate" id="qty-stars"> @for($i = 1; $i <= 5; $i++) <i  @if( $i <= $star ) style="color:#ea9d02 ;" @endif class="fas fa-star"></i> @endfor  </span>
            <span id="qty-ratings"><span> {{$data['rating']['count']}} bài đánh giá</span></span>
                    
            <span class="price-product">
                {{ $data['product'][0]['price'] }} $
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
            @foreach ($data['relatedProduct'][0]['products'] as $product)
            <div class="product-info">
                <a href="{{ route('detail-product', $product['id']) }}"> <img src="{{ asset('/images/productImages/'. $product['image']['url'] ) }}" alt=""></a>
              <div class="add-cart">
                <div class="add" style="text-align: center;height: 40px;padding: 3px;">
                    <a style="font-size: 20px;font-weight: bold;" class="addToCart" href="" data-url="{{ route('addToCart', $product['id']) }}" ><span>Add To Cart</span></a>
                </div>
              </div>
                <div class="product-name">
                    <span>{{ $product['name'] }} </span>
                </div>
                <div class="product-price">
                    <span>${{ number_format($product['price'],0,',') }}</span>
                </div>
                
            </div>

            @endforeach
        </div>
     

<div class="rate-product" >
<div class="rate-info">
<h5>Đánh giá & Nhận xét {{$data['product'][0]['name'] }}</h5>
<p>Đánh Giá Trung Bình</p>

<h1>{{$star}}/5</h1>
<label for="" class="qty-stars" > @for($i=1;$i<=5;$i++) <i @if( $i <= $star ) style="color:#ea9d02 ;" @endif class="fas fa-star"></i> @endfor </label>
<span class="qty-ratings"><span>{{$data['rating']['count']}} bài đánh giá</span></span>

</div>

<div class="rate-request">
    <h5>Đánh giá của khách hàng</h5>
   <div class="rating" style="width: 90%;;height: 400px;margin-top: 20px;text-align: left;margin-left: 5%">
 @foreach ($data['rating']['rating']  as $rating )
  <div style="width: 100%;margin-bottom: 1%;">
    <div style="width:15%">
        <label for="">{{$rating['name']}}  Sao</label>
       </div>
       <div style="width: 70%">
        <div  class="show-ratio" id="show-ratio-{{$rating['name']}}" style="width: {{$rating['ratio']}}%  "></div>
       </div>
        <label for="" class="ratio-{{$rating['name']}}"><span> {{number_format($rating['ratio'])}}% </span></label>
    </div>
  @endforeach  
   </div>
    </div>
  
<div class="rate-chart">

    @if(session()->has('message'))
    <span style="position: absolute;transform: translateX(-190px);color: red;padding-top: 50px ">
       {{ session()->get('message') }}

    </span>
    @endif
   
    <h5 >Bạn chấm sản phẩm này bao nhiêu sao?</h5>

    <span class="message-rating" style="opacity: 0;color: #95c746;">Đánh giá thành công !!!</span>

    <form action="{{ route('rate') }}" method="post" id="rate-user">
        @csrf
        @for($i=1;$i<=5;$i++) <i id="star-{{$i}}" @if($i < 2) style="color:#ea9d02;" @endif  data-star="{{$i}}" class="star fas fa-star"></i> @endfor 
        <input type="hidden" name="star" id="star" value="1">
        <input type="hidden" name="product_id" id="product_id" value="{{$data['product']['0']['id']}}">
        <input  type="text" placeholder="Họ Và Tên" id="name"  name="name">
        @error('name')
        <span style="text-align: center;color: red;">{{$message}}</span>
        @enderror
        <input   type="text" placeholder="Email" id="email"   name="email">
        @error('email')
        <span style="transform: translateY();text-align: center;color: red;">{{$message}}</span>
         @enderror
        <input type="submit" href="" id="rating" class="btn btn-danger">
    </form>
</div>

</div>


<script>
    $(document).ready(function(){
    $('#rate-user').validate({
        rules: {
            name: {
                required: true,

            },
            email: {
                email:true,
                required: true,
            
            },
          
        },
        messages: {
            name: {
                required: "Không được để trống",

            },
            email: {
                required: "Không được để trống",
                "email": "Email không hợp lệ",
            
            },
        }

    });
});
</script>

<script>
    $(document).on('click', '#rating', function(e){
        e.preventDefault();
        if($("#rate-user").valid()){
            var star =   $("#star").val();
      var name =   $("#name").val();
      var email =   $("#email").val();
      var token = $('input[name=_token]').val();
      var product_id =  $("#product_id").val();
      $.ajax({
        type: "post",
         url: "{{ route('rate') }}",
         data:{
             star:star,
             name:name,
             email:email,
             product_id: product_id,
             _token:token,
         },
         success:function(data) {
             console.log(data);
             var rating ={};
// load chart
             $.each(data.rating, function(key,data){
                 rating[data.name] = '' ;
                $('#show-ratio-'+ data.name).css('width', data.ratio + '%');
                rating[data.name] += '<span> ' + Math.round(data.ratio) + ' % </span>'
                $('.ratio-'+ data.name).html(rating[data.name]);
             });
// load qty
             var qtyRatings = '<span>'+data.count+' bài đánh giá</span>'
              $('#qty-ratings').html(qtyRatings);
              $('.qty-ratings').html(qtyRatings);
// load star
              var qtyStars = ''
              for(var i = 1; i <= data.biggest.star; i++){

         qtyStars +=   '<i style="color:#ea9d02 ;" class="fas fa-star">  </i>'
                }
                for(var i = data.biggest.star; i < 5; i++){
         qtyStars +=   '<i  class="fas fa-star"></i>'
                }
                $('.qty-stars').html(qtyStars);
                $('#qty-stars').html(qtyStars);
    // send message
    $(".message-rating").css('opacity', 1);         
        
    // re-load input 
    $("#name").val('');
    $("#email").val('');    
         }
      });
        }
  
    });
</script>

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



      
        $(".star").click(function(){
            var star =    $(this).data('star');
            $('#star').val(star);
            $(".star").css("color","#212529"); 
            for(let i = 1; i <= star ; i++  ){
            
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

           else if (content == '') {
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
