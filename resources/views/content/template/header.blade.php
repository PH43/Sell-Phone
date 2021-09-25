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

        background-color: #f6f6f4;
    }

    .header-search input {
        display: flex;
        top: 10px;
        transform: translateX(46px);
        width: 38%;
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
        width: 8%;
        ;
    }

    .header-top1 div span {
        font-size: 15px;
        font-weight: 500;
    }

    .header-bot {
        width: 100%;
        height: 54px;

    }

    .header-menu {
        margin-left: 10%;

    }

    .header-menu li {
        font-size: 17px;
        font-weight: 500;
        line-height: 22px;
        display: inline-block;
        transition: all 0.5s;
        padding: 12px 25px;
        margin-top: 5px;
        float: left;
        text-decoration: none;
        color: black;
    }

    .header-menu li a {
        text-decoration: none;
        color: black;
    }

    .header-top1 div span a {
        text-decoration: none;
        color: black;
    }

    .show-cart-product1 li a {
        color: white;
        font-weight: 400;
    }

    .show-cart-product1 li {
        padding: 5px 10px;
        list-style: none;

        font-weight: 500;
        color: black;
    }

    .show-cart-product1 li img {
        margin-right: 5px;
        width: 40px;
        height: 40px;
        background-position: 50% 50%;
    }

    .show-cart-product1 span {
        margin-left: 80px;
        color: orangered;
        font-weight: 700;
    }

    .show-cart-product1 {
        box-shadow: rgba(111, 111, 114, 0.2) 0px 7px 29px 0px;

        transform: translateX(-150px);
        background-color: white;
        position: absolute;
        width: 400px;
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

    .header-menu li:hover .categories-phone {
        display: block;
    }

    .header-menu li:hover {
        background-color: rgb(245, 245, 245);
    }

    .categories-phone a:hover {
        font-size: 14px;
        opacity: 0.7;
    }

    .add-product-cart li a {
        float: left;
        clear: both;
    }

    .add-product-cart li span {
        float: right;
    }

    .header-image img {

        width: 100%;

    }
    .acction-users {
                    position: absolute;
                    display: inline-block;
                    width: 180px;
                    padding: 10px 0px;
                    ;
                    transform: translateX(-20px);
                    background-color: black;
                    color: white;
                    height: 100px;;
                    border-radius: 10px;
                    margin-top: 10px;
                }
                .users{
                    list-style: none;font-weight: 600
                }
                .users a{
                    text-decoration: none;
                    color: black;
                }
                .users:hover .acction-users {
                    display: block;
                }
                .acction-users a{
                    font-weight: 500;
                    display: block;
                    text-decoration: none;
                    margin-left: 5px;
                    color: white;
                    padding: 5px 0px;
                    font-size: 16px;
                }
                .acction-users a:hover{
                    opacity: 0.8;
                    font-size: 13px;
                }


</style>
<header class="fixed-top">
    <div class="header-top ">
        <div class="header-top1">
            <div class="header-name">
                <a href="http://localhost/duy1/public/show"><img src="{{ asset('../public/images/2.jpg') }}"
                        alt=""></a>
            </div>
            <div class="header-search">
                <form action="">
                    <i class="fas fa-search"></i>
                    <input type="search" placeholder="Search">
                </form>
            </div>
            <div class="header-buyonline">
                <span>Mua online giảm 10%</span>
            </div>
            <div class="header-cart">
                <span class="cart-show"><i class=" fas fa-shopping-cart"></i> <a href="">Giỏ hàng</a><br>
                    <div class="show-cart-product1" style="display: none">
                        <h5>Sản phẩm mới được thêm</h5>
                        <div class="add-product-cart">
                            <div class="addproduct">
                                <li><a href=""> <img src="" alt="">name</a> <span>$500</span> </li>
                            </div>

                        </div>
                        
                        <div style="float: right;margin-right: 10px;margin-top: 5px;">
                            <a href="" style="color:black;padding: 5px 10px;background-color: orangered;opacity: 1;"
                                href="">Xem
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

                    <li class="users" ><a href=""> {{ Auth::user()->name }}</a>
                    <li class="acction-users">
                        <a style=""  href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                
                                @csrf
                            </form>
                        </a>

                        <a href="">Change Password</a>
                    </li>
                    </li>



                </div>

            @endguest
<script>
    $('.acction-users').hide();
   
     $('.users').click(function(){
         event.preventDefault();
        $('.acction-users').toggle(300);
    });
 

 
</script>
        </div>

    </div>
    </div>

    <div class="header-bot">
        <div class="header-menu">


@foreach ($brands as $brands)
<li> <a href="">{{$brands['name']}} </a>
    <div class="categories-phone">
        @foreach ($brands['brands'] as $br)
        <a style="color:white;" href="">{{ $br->name }}</a>      
        @endforeach
    </div>
</li>





@endforeach
<li><a>Kính cường lực</a></li>
<li><a>Phụ kiện</a></li>
<li><a>More</a></li>            
        </div>
    </div>

</header>
<div style="width: 100%; height:140px;clear: both;"></div>
