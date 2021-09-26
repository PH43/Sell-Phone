@extends('content/template/template')
@section('body')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .showproduct {
            width: 96%;
            margin-left: 2%;
            height: auto;
            background-color: #f8f9fa;
            margin-top: 30px;
            padding-bottom: 50px;
            box-shadow: rgba(226, 226, 226, 0.2) 0px 7px 29px 0px;

        }

        .buy-product {
            display: inline-block;
            width: 80%;

            background-color: #f8f9fa;
        }



        .product-info {

            margin-bottom: 20px;
            --columns: 4;
            width: calc(calc(100% / var(--columns)) - 10px);
            display: inline-block;
            margin-left: 5px;
            padding: 10px 0px;

            text-align: center;

            transition: all 0.5s;
        }

        .product-all {
            border: 1px solid rgb(194, 194, 194);
            width: 100%;


        }

        .product-action {
            transform: translateY(-50px)
        }

        .product-info:hover .product-action a {
            opacity: 1;
        }

        .product-action a:hover {
            background-color: #c27b43;
        }

        .product-action a {
            padding: 12px 15px;
            background-color: #bdab98;
            color: black;
            opacity: 0;
            transition: all 0.5s;
        }

        .product-info img {

            width: 90%;
            margin-top: 2%;

            height: cover;


        }

        .product-name {}

        .product-name span {
            text-align: center;
            margin-top: 20px;

            line-height: 21px;
            font-weight: 600;
            word-break: all;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-word;
            font-size: 17px;
            letter-spacing: 0.24px;
            margin-bottom: 20px;
        }

        .product-price {
            text-align: center;
        }

        .product-price span {
            text-align: center;
            font-size: 26px;

            color: #3b3b3b;
            font-weight: 700;
        }







        .product-info:hover .product-info img {
            box-shadow: rgba(153, 153, 153, 0.2) 0px 7px 29px 0px;
            transform: translateY(-20px);
        }

        .add-product form input {

            height: 40px;
            width: auto;
            margin-left: 40%;
            background-color: orange;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            padding: 5px 5px;
            font-weight: 600;
            font-size: 16px;
            border: 0px;
        }

        .info-category-page {
            text-align: left;
            padding-top: 20px;
            width: 100%;
            background-color: white;
            border-radius: 10px;
            height: auto;
            padding-bottom: 10px;
        }

        .name-category {
            padding: 60px 20px;
            font-size: 28px;
            color: #212529;
            font-weight: 700;
            font-family: Roboto;


        }

        .name-factory {}


        .count-product {
            font-weight: 700;
        }

        .product-details span {
            text-align: left;
            display: block;
            margin-top: 10px;
        }

        .product-details span i {
            margin-right: 4px;
        }

        .menu-categories {
            width: 17%;
            margin-top: 0px;
            float: left;

        }



        .redirect-categories {
            margin-top: 60px;
        }

        .redirect-categories a {
            height: auto;
            display: block;
            text-decoration: none;
            color: #212529;
            margin-bottom: 10px;
            font-size: 15px;
            font-weight: 700;

        }

        .redirect-brands {

            margin-left: 0%;
        }

        .redirect-brands a li {
            list-style: none;
        }

        .redirect-brands1 ul a {
            font-weight: 400;
        }

        #search-product {
            margin-top: 60px;
        }

        #search-product input[type="search"] {
            height: 35px;
            width: 85%;
            border-radius: 5px;
            border: 2px solid black;
        }

        #search-product button {
            border: 0px;
            background-color: white;
            transform: translateX(-40px)
        }

        .get-product-category {
            float: left;
            width: 100%;
            margin-top: 5px;
            text-align: left;
            margin-left: 1%;

        }

        .images-category {
            margin-top: 10px;
            width: 100%;
            padding-left: 20px;
            border-top: 1px solid rgb(192, 192, 192);
        }

        .images-category img {
            margin-top: 15px;
        }

        .list-product {
            border: 1px solid #ececec;
            width: 100%;
            height: auto;
            padding: 10px 0px;
            margin-top: 20px;
            background-color: white;
            border-radius: 10px;
        }

        .select-product {
            width: 96%;

            margin: 30px 2%;
        }

        .select-product-left span {
            margin-right: 2%;
        }

        .select-product-left a {
            display: inline-block;
            padding: 5px 8px;
            color: #8392a5;
            border: 1px solid #ced4da;
            text-decoration: none;
        }

        .add-product-checkbox {
            width: 100%;
            height: 400px;
        }

        .add-product-checkbox a {
            padding: 10px
        }

        .product-checkbox {
            display: inline-block;
            margin-right: 23%;
            line-height: 35px;
        }

        .product-checkbox label {
            color: #4d4d4d;
            font-size: 16px;
            margin-left: 7px;
            font-family: Roboto;
        }

        .categories-checkbox {
            display: inline-block;
            margin-right: 10px;
        }

    </style>
    <div class="showproduct">

        <div class="buy-product">
            <div class="info-category-page">
                <div class="info-category">
                    <span class="name-category">Rượu <span class="name-factory"> Qisky</span></span>
                    <span><span class="count-product"> 8 </span> devices found</span>
                    <div class="images-category">
                        <img src="https://ruouthuonghieu.com/wp-content/uploads/2019/04/ballentines.jpg" alt="">
                    </div>
                </div>

            </div>

            <div class="list-product">
                <div class="select-product">
                    <div class="select-product-left">
                        <span>Ưu tiên xem:</span>
                        <a href="">Bán chạy nhất</a>
                        <a href="">Mới nhất</a>
                        <a href="">Gía thấp</a>
                        <a href="">Gía cao</a>
                        <a href="">Xem nhiều nhất</a>

                        <label for=""><i>a</i> <i>a</i></label>
                    </div>

                </div>
                @foreach ($products as $p)
                    <div class="product-info">
                        <div class="product-all">
                            <a href=""> <img src="{{ asset('../public/images/phone1.jpg') }}" alt=""></a>
                            <div class="product-action">

                                <a href=""> <i class="fas fa-search-plus"></i></a>
                                <a href=""><i class="fas fa-heart"></i></a>
                                <a href=""><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="product-details">
                            <span>{{ $p['name'] }}</span>
                            <span>
                                @for ($i = 1; $i <= 5; $i++)
                                    <i id="stars-{{ $i }}" data-stars="{{ $i }}"
                                        class="stars fas fa-star"></i>
                                @endfor
                            </span>
                            <span>{{ number_format($p['price'], 0, ',') }} $ </span></span>
                        </div>
                    </div>

                @endforeach



                <div class="add-product">
                    <button>1</button>
                </div>
            </div>




        </div>

        <div class="menu-categories">
            <h3>Filter Product</h3>



            <div class="redirect-categories">

                <div class="add-product-checkbox">



                    <a onclick="showbrands(1)" href="Javascript:0">Hãng sản xuất</a>
                    @foreach ($brands as $b)
                        <div class="product-checkbox">
                            <input type="checkbox" class="checked-brands" value="{{$b['id']}}">
                            <label for="">{{ $b['name'] }}</label>
                        </div>
                    @endforeach


                </div>
<script>
    $('.checked-brands').click(function(){
var brands = Array.from(document.querySelectorAll(".checked-brands"))
.filter(checkbox => checkbox.checked)
.map(checkbox => checkbox.value);
brands.reverse();
var url += '{{ asset("list/product/category/")}}'


    });

    
</script>


            </div>


        </div>
    </div>
    <div style="width: 100%;height: 100px; clear: both;">

    </div>
    <div style="width: 100%;border-bottom: 2px solid black;margin-top: 20px;;clear: both;">

    </div>


@endsection
