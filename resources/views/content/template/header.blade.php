
<style>
    * {
        padding: 0px;
        margin: 0px;

    }

    header {
        background-color: white;
        width: 100%;
        height: 115px;
        box-shadow: rgba(111, 111, 114, 0.2) 0px 7px 29px 0px;

    }

    .header-top {

        width: 100%;
        height: 60px;
        border-bottom: 1px solid #adadad;
    }

    .header-top1 {
        transform: translateY(8px);
        width: 96%;
        margin-left: 2%;


    }

    .header-top1 div {
        margin-left: 20px;
        display: inline-block;
    }


    .header-name {
        float: left;
        width: 120px;

    }

    .header-name img {
        width: 100%;
        height: 36px;
    }

    .header-search i {
        position: absolute;
        font-size: 18px;
        font-weight: 600;
        background-color: #f6f6f4;

        margin: 12px;

    }

    .header-search {
        float: left;
        border-radius: 7px;
        width: 44%;
        height: 45px;
        position: relative;
        background-color: #f6f6f4;
    }

    .header-search input {
        display: flex;
        top: 10px;
        transform: translateX(46px);
        width: 90%;
        background-color: #f6f6f4;
        border: 0px;
        position: absolute;
    }

    .header-buyonline {
        width: 15%;
        height: 90%;
        margin-top: 10px;
        border-right: 1px solid #adadad;

    }

    .header-cart {

        border-right: 1px solid #adadad;
        width: 8%;


    }

    .header-login {
        border-right: 1px solid #adadad;
        width: auto;;
        padding-right: 10px;
    }

    .header-top1 div span {
        font-size: 15px;
        font-weight: 500;
    }

    .header-bot {
        width: 100%;
        text-align: center;
        height: 54px;

    }



    .header-bot li {
        text-align: center;
        font-size: 17px;
        font-weight: 500;
        line-height: 22px;
        display: inline-block;
        transition: all 0.5s;
        padding: 12px 25px;
        margin-top: 5px;
        display: inline-block;
        text-decoration: none;
        color: black;
    }

    .header-bot li a {
        text-decoration: none;
        color: black;
    }

    .header-top1 div span a {
        text-decoration: none;
        color: black;
    }

    
    .show-cart-product1 {
        box-shadow: rgba(111, 111, 114, 0.2) 0px 7px 29px 0px;
   
        transform: translateX(-150px);
        background-color: white;
        position: absolute;
        width: 450px;
        border-radius: 5px;
        opacity: 1;
        height: auto;
        padding-bottom: 20px;
    }

    .show-cart-product1 h5 {
        font-weight: 400;
        font-size: 15px;
        opacity: 0.7;
        color: black;
        padding: 10px 5px;
    }


    .categories-phone {


        border-radius: 5px;
        width: 150px;
        background-color: black;
        color: white;
        position: absolute;
        list-style: none;
        padding: 0px 5px;
        margin-right: 100px;
        display: none;
        transform: translateX(-30px);
        margin-top: 10px;

    }

    .categories-phone a {
        display: block;
        padding: 5px 10px;
        color: white;
        font-weight: 500;
        font-size: 17px;
        transition: all 0.3s;
    }

    .header-bot li:hover .categories-phone {
        display: block;
    }

    .header-bot li:hover {
        background-color: rgb(245, 245, 245);
    }

    .categories-phone a:hover {
        font-size: 14px;
        opacity: 0.7;
    }

    
    

    .header-image img {

        width: 100%;

    }
    .add-product-cart{
        width: 100%;
    }

    .acction-users {
        position: absolute;
        display: inline-block;
        text-align: left;
        padding: 10px 10px;
        ;
        transform: translateX(-20px);
        background-color: black;
        color: white;
    
        border-radius: 10px;
        margin-top: 10px;
    }

    .users {
        list-style: none;
        font-weight: 600
    }

    .users a {
        text-decoration: none;
        color: black;
    }

    .users:hover .acction-users {
        display: block;
    }

    .acction-users a {
        font-weight: 500;
        display: block;
        text-decoration: none;
        margin-left: 5px;
        color: white;
        padding: 5px 0px;
        font-size: 16px;
    }

    .acction-users a:hover {
        opacity: 0.8;

    }

    .search-product {
        width: 100%;
        height: auto;
        position: absolute;
        background-color: rgb(245, 245, 245);
        margin-top: 45px;
        padding-bottom: 40px;
        transform: translateX(-20px)
    }

    .search-product span {
        padding: 5px 5px;

        display: block;
        background-color: rgb(226, 226, 226);
    }

    .show-search-product span {
        color: black;
            display: block;
            width: 100%;
        background-color: rgb(245, 245, 245);
    }
    .show-search-product span:hover{
    color: rgb(54, 54, 54);
    opacity: 0.7;
    }
.cart-show:hover .show-cart-product1{
display: block;
}
.addproduct{
    width: 90%;
    margin-top: 10px;

}
.addproduct li{
    display: inline-block;
    margin-left: 10px;
}
.addproduct li img{
    width: 60px ;
    height: 60px;
}


</style>
<?php  $cart = Session::all(); ?>
<meta name="csrf-token" content="{{ csrf_token() }}">
<header class="fixed-top">
    
    <div class="header-top ">
        <div class="header-top1">
            <div class="header-name">
                <a href="{{ route('home') }}"><img src="{{ asset('/images/IconPage.png') }}" alt=""></a>
            </div>
            <div class="header-search">
                <form action="{{ route('list-product-category', ) }}" method="get" >
     
                    <i class="fas fa-search"></i>
                    
                    <input type="search" placeholder="Search" autocomplete="off" name="search" class="search" @if (isset($_GET['search']))
                        value="{{ $_GET['search'] }}"
                    @endif>
                </form>

                <div class="search-product" style="display: none;">
                    <span>Xu hướng tìm kiếm</span>
                    <div class="show-search-product">

                    </div>
                </div>
            </div>


            <div class="header-buyonline">
                <span>Mua online giảm 10%</span>
            </div>
            <div class="header-cart">
                <span class="cart-show"><i class=" fas fa-shopping-cart"></i> <a href="{{ route('show-cart') }}">Giỏ hàng</a><br>
                    <div class="show-cart-product1" style="display: none;">
                        <h5>Sản phẩm mới được thêm</h5>
                       
                        <div class="add-product-cart">
                            @if(isset($cart['cart']))
                            @foreach ($cart['cart'] as $cart )
                            <div class="addproduct" id="cart-{{$cart['id'] }}">
                                <li> <img src="http://localhost/sell-phone/public/images/productImages/{{ $cart['image'] }}" alt=""> </li>
                                <li style="width:40%;  "> <span> {{ $cart['name'] }}</span> </li>
                                <li style="width:15%;" > <span style="color: orange ; "> <span  > ${{ number_format($cart['price'],0,',') }}</span> </li>
                              
                               </div>
                            @endforeach 
                            @endif
                                 
                        </div>

                        <div style="float: right;margin-right: 10px;margin-top: 5px;">
                            <a href="{{ route('show-cart') }}" style="color:black;padding: 5px 10px;background-color: orangered;opacity: 1;"
                                href="{{ route('show-cart') }}">Xem
                                Giỏ hàng</a>
                        </div>
                    </div>
                </span>
            </div>

            <div class="header-login">
                @guest
                    @if (Route::has('login'))
                        <span><i class="fas fa-user-alt"></i> <a href="{{ route('login') }}">Login</a></span>
                    @endif
                @else

                    <li class="users"><a href=""> {{Auth::user()->name  }}</a>
                    <li class="acction-users" style="display: none;">
                       
                        <a href="{{ route('showInfo') }}">Tài khoản</a>
                        <a href="{{ route('changeForm') }}">Đổi mật khẩu</a>
                  
                        <a style="" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                         Đăng xuất

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                      @csrf
                      </form>
                       </a>
                    </li>
                    </li>

                </div>

            @endguest

        </div>

    </div>
    </div>

    <div class="header-bot">



        @foreach ($categories as $categories)
            <li> <a href="{{ route('list-product-category', ['cate' => $categories['id']]) }}">{{ $categories['name'] }}
                </a>
                <div class="categories-phone">
                    @foreach ($categories['brands'] as $br)
                        <a style="color:white;" href="
                            {{ route('list-product-category', ['cate' => $categories['id'], 'brands' => $br['id']]) }}
                            ">{{ $br->name }}</a>
                    @endforeach
                </div>
            </li>





        @endforeach
        <li><a>Kính cường lực</a></li>
        <li><a>Phụ kiện</a></li>
        <li><a>More</a></li>

    </div>
    <div class="header-image">
        <img src="{{ asset('/images/slider.png') }}" alt="">
    </div>
</header>
<div style="width: 100%; height:140px;clear: both;"></div>




<script>
    $('.users').click(function() {
        event.preventDefault();
        $('.acction-users').show(300);
    });
</script>
<script>
    $('.cart-show').hover(function(e){

      $('.show-cart-product1').show();  
    },function(){
        $('.show-cart-product1').hide();  
    } 
    );
</script>

<script>
    $(document).click(function() {
        $('.search-product').hide();
        $('.acction-users').hide();
    
    });
    function searchProduct(search,token){
       $.ajax({
           type: "POST",
           url: "{{ route('search-product') }}",
           data: {
               search: search,
               _token: token

           },
           success: function(data) {
               var html = '';
               $.each(data, function(key, data) {
                   html += '<a style="text-decoration:none" href="http://localhost/sell-phone/public/product/' + data.id + '"><span>' + data.name + '</span></a>'

               });
               $('.search-product').show();
               if (search.length <= 2) {
                   $('.search-product').hide();
               }
               $('.show-search-product').html(html);

           }
       })
   
}
$(document).on('click', '.search', function() {
    var search = $(this).val();
    var token = $('meta[name="csrf-token"]').attr('content');
    if (search.trim().length >= 2) {
   
       
        searchProduct(search,token);
    }
    });

    $(document).on('keyup', '.search', function() {
        var search = $(this).val();
    var token = $('meta[name="csrf-token"]').attr('content');
    if (search.trim().length >= 2) {       
        searchProduct(search,token);
    }
    });


   
</script>



<script>
    $(document).on('click', '.addToCart',  function(e){
e.preventDefault();
var url = $(this).data("url");
$.ajax({
    type: "get",
    url:  url,
    success: function(data){
     console.log(data);
      var cart = ''
      $.each(data, function (key, data){
        cart +=  
       ' <div class="addproduct" id="cart-'+ data.id +'">' + 
         ' <li> <img src="http://localhost/sell-phone/public/images/productImages/'+data.image+' " alt=""> </li>' + 
          ' <li style="width:40%;  "> <span> '+data.name+'</span> </li>' +
        ' <li style="width:15%;" > <span style="color: orange ; "> <span  > '+formatNumber(data.price) +' $</span> </li>' +
   
        ' </div>' 

        
      });
      $('.add-product-cart').html(cart);
     
    }
})

    });

    function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}
</script>