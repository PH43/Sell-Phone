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

        .change-product {

            padding: 10px 60px;
            ;
            border: 1px solid rgb(192, 192, 192);
            display: inline-block;
            border-radius: 5px;
            color: black;
            font-size: 18px;
            font-weight: 500;


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
            text-align: left;
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

        .take-product {
            width: 100%;
            text-align: center;
        }

        .take-product a:hover {
            background-color: rgb(218, 218, 218);
            opacity: 0.8;
        }

        .take-product a {
            text-decoration: none;
            color: rgb(128, 126, 126);
            display: inline-block;
            text-align: center;
            font-size: 17px;
            padding: 5px 20px;
            border: 1px solid rgb(167, 167, 167);

        }

        .container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 15px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default radio button */
        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom radio button */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input~.checkmark {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .container input:checked~.checkmark {
            background-color: #2196F3;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .container input:checked~.checkmark:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .container .checkmark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }

    </style>

    <div class="showproduct">

        <div class="buy-product">
            <div class="info-category-page">
                <div class="info-category">
                    <span class="name-category">{{ $category['name'] }} <span class="name-factory"></span></span>
                    <span><span class="count-product"> </span>
                        devices found</span>
                    <div class="images-category">
                        <img src="https://ruouthuonghieu.com/wp-content/uploads/2019/04/ballentines.jpg" alt="">
                    </div>
                </div>

            </div>
            .
            <div class="list-product">
                <div class="select-product">
                    <div class="select-product-left">
                        <span>Ưu tiên xem:</span>

                        <a class="filter-product" href="Javascript:0" data-colum="id" data-type="desc">Sản phẩm mới nhất</a>

                        <a class="filter-product" href="Javascript:0" data-colum="id" data-type="asc">Sản phẩm cũ nhất </a>

                        <a class="filter-product" href="Javascript:0" data-colum="price" data-type="desc">Giá từ cao đến
                            thấp</a>

                        <a class="filter-product" href="Javascript:0" data-colum="price" data-type="asc">Giá Từ thấp đến
                            cao</a>




                    </div>

                </div>
                <div class="show-list-product">

                    @foreach ($data['products'] as $product)

                        <div class="product-info">
                            <div class="product-all">
                                <a href="{{ route('detail-product', $product['id']) }}"> <img
                                        src="{{ asset('/images/productImages/' . $product['image']['url']) }}"
                                        alt=""></a>
                                <div class="product-action">

                                    <a href="" class="test"> <i class="fas fa-search-plus"></i></a>
                                    <a href=""><i class="fas fa-heart"></i></a>
                                    <a href=""><i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product-details">
                                <span>{{ $product['name'] }}</span>
                                <span>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i id="stars-{{ $i }}" data-stars="{{ $i }}"
                                            class="stars fas fa-star"></i>
                                    @endfor
                                </span>
                                <span>{{ number_format($product['price'], 0, ',') }} $ </span></span>
                            </div>
                        </div>

                    @endforeach

                </div>

                <div class="take-product">
                    @for ($i = 1; $i <= ceil($data['count']/4); $i++) 
                    <a href="Javascript:0" style="margin-right:5px;"  class="filter-product" data-page="{{$i}}"  id="take-{{$i}}"> {{$i}} </a>             
                        
                    @endfor


                </div>

            </div>
        </div>
        <div class="menu-categories" style="margin-bottom: 200px;">
            <h3>Filter Product</h3>


            <div class="redirect-categories">

                <div class="add-product-checkbox">



                    <a onclick="showbrands(1)" href="Javascript:0">Hãng sản xuất</a>


            


                    @if (isset($_GET['brands']))
                        <?php $br = explode(',', $_GET['brands']); ?>

                    @endif
                    @foreach ($category['brands'] as $brand)

                        <label class="container"> <label for="">{{ $brand['name'] }}</label>
                            <input type="checkbox" class="filter-product" id="brand" @if (isset($br))
                            @if (in_array($brand['id'], $br))
                                checked
                            @endif
                    @endif

                    value="{{ $brand['id'] }}">

                    <span class="checkmark"></span>
                    </label>

                    @endforeach

                    <div class="filter-price" style="margin-top:20px;">
                        <a href="">Lọc giá</a>
                        <label class="container">Tất cả
                            <input type="radio" class="filter-product" name="radio" data-min="1" data-max="2" @if (!isset($_GET['min']))
                            checked
                            @endif
                            >
                            <span class="checkmark"></span>

                        </label>
                        @for ($i = 1; $i <= 9; $i++)
                            <label class="container">Từ {{ ($i -1) * 500 + 1 }} - {{ $i * 500 }}
                                <input type="radio" class="filter-product" name="radio" data-min="{{ ($i -1 ) * 500  + 1}}"
                                    data-max="{{ $i * 500 }}" @if (isset($_GET['min']) && isset($_GET['max']))
                                @if ($_GET['min'] == ($i - 1) * 500 + 1 && $_GET['max'] == $i * 500)
                                    checked
                                @endif
                        @endif

                        >
                        <span class="checkmark"></span>

                        </label>
                        @endfor
                        <label class="container">Trên 4500
                            <input type="radio" class="filter-product" name="radio" data-min="4500" data-max="999999999">
                            <span class="checkmark"></span>

                        </label>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div style="width: 100%;height: 100px; clear: both;">

    </div>
    <div style="width: 100%;border-bottom: 2px solid black;margin-top: 20px;;clear: both;">

    </div>


    <script>
        //categoty
        $(document).on('click', '.filter-product', function(e) {


            var url = new URL(window.location.href);

            url.searchParams.set('page', 1);
            //  brand    ---------------------------------------------
            var brands = Array.from(document.querySelectorAll("#brand"))
                .filter(checkbox => checkbox.checked)
                .map(checkbox => checkbox.value);

            
            if (brands !== '') {
                url.searchParams.set('brands', brands.toString());
            }

       

            if (url.searchParams.get('brands') == '') {
                url.searchParams.delete('brands');
            }


            //phan loai   ------------------------------------------
            var colum = $(this).data("colum");
            var type = $(this).data("type");
            if (typeof colum !== 'undefined' && typeof type !== 'undefined') {
                url.searchParams.set('colum', colum, );
                url.searchParams.set('type', type, );

            }
            //loc gia ------------------------------------------
            var min = $('input[name="radio"]:checked').data("min");
            var max = $('input[name="radio"]:checked').data("max");
            if (typeof min !== 'undefined' && typeof max !== 'undefined') {
                url.searchParams.set('min', min, );
                url.searchParams.set('max', max, );
                url.searchParams.delete('take');
            }
            if (min == 1 && max == 2) {
                url.searchParams.delete('min');
                url.searchParams.delete('max');
            }

            // phan trang
            var page = $(this).data("page");
            if (typeof page !== 'undefined') {


                url.searchParams.set('page', (page));

            }

            window.history.pushState({}, '', url);

            $.ajax({
                type: 'get',
                url: url,
                success: function(data) {

                    var html = ''
                    $.each(data.products, function(key, product) {

                        html +=

                        '<div class="product-info">'+
            '<div class="product-all">'+
                 '<a href="http://localhost/sell-phone/public/product/'+ product.id + '"> <img src="http://localhost/sell-phone/public/images/productImages/'+product.image.url+' " alt=""></a>'+
            '<div class="product-action">'+
                '<a style="margin-right: 7px;"   href="" class="test" > <i  class="fas fa-search-plus"></i></a>'+
                '<a style="margin-right: 7px;" href=""><i class="fas fa-heart"></i></a>'+
                '<a style="margin-right: 7px;" href=""><i class="fas fa-shopping-cart"></i></a></div></div>'+
                 '<div class="product-details">'+
                '<span>'+ product.name +'</span><span>'+
                '@for ($i = 1; $i <= 5; $i++)'+
                   ' <i id="stars-{{ $i }}" data-stars="{{ $i }}"'+
                      '  class="stars fas fa-star"></i>'+
               ' @endfor</span>'+
                '<span> ' + product.price + ' $ </span></span></div></div>'

                    });

                    var count = Math.ceil(data.count / 4);
                    console.log(count);
                    var page = '';
                    //------------------------------------------------------------------
                    for (var i = 1; i <= count; i++) {
                        page +=
         '<a href="Javascript:0" style="margin-right:5px;"  class="filter-product" data-page="' + i + '"  id="take-' + i + '">' + i + '</a>'
                    }
                    //-----------------------------------------------------------------------

                    $('.take-product').html(page);



                    //-------------------------------------------------------------------------------

                    $('.show-list-product').html(html);

                }
            });

        });
    </script>






@endsection
