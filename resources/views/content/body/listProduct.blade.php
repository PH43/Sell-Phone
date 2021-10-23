@extends('content/template/template')
@section('tittle')
    Lọc sản phẩm
@endsection
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
            padding: 20px 0px ;
            background-color: #f8f9fa;
        }



        .product-info {

--columns: 4;
width: calc(calc(100% / var(--columns)) - 10px);
margin-bottom: 5rem;
display: inline-block;
margin-top: 50px;

text-align: center;


}

.product-info img {
width: 84%;
margin-left: 8%;
height: 260px;
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
line-height:20px;

font-weight: 700;
}

.add {
background-color: black;
width: 100%;
position: absolute;

opacity: 0;
transition: all 0.5s;
transform: translateY(-10px);
height: 43px;;
}
.add-cart{
position: relative;
width: 100%;
height: auto;
text-align: center;
}

.add a {

color: white;
font-weight: 500;
font-size: 20px;
font-weight: bold;

}


.product-info:hover .add {
transform: translateY(-40px);
opacity: 1;
}

.product-info:hover {
border: 1px solid black;
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
        .count-product span{
            font-weight: 400;
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
            margin-top: 100px;
            padding: 20px;
        }

        .take-product a:hover {
            background-color: rgb(218, 218, 218);
            opacity: 0.8;
        }

        .take-product a {
            font-weight: bold;
            text-decoration: none;
            color: rgb(128, 126, 126);
            display: inline-block;
            text-align: center;
            font-size: 17px;
            padding: 8px 13px;
            margin-right: 5px;
            border: 2px solid rgb(167, 167, 167);

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
.sort-1{
    background-color:red;
}
    </style>

    <div class="showproduct">

        <div class="buy-product">
            <div class="info-category-page">
                <div class="info-category">
                    <span class="name-category">
                        @if(isset($_GET['search']))
                        Từ khóa tìm kiếm: {{$_GET['search']}}
                        @else
                        @if(isset( $data['products'][0]['categories']['name'] ))
                        {{ $data['products'][0]['categories']['name'] }}
             
                        @endif
                     
                        @endif
                        
                        <span class="name-factory"></span></span>
                    <span class="count-product"><span >({{ $data['count'] }} Sản phẩm)</span></span>
                    <div class="images-category">
                        <div class="owl-carousel owl-theme">

                            <a href=""> <img src="https://s3n.cashify.in/cashify/brand/img/xhdpi/2e7cdc22-5a5f.jpg" alt=""></a>
                            <a href=""><img src="https://cshprod.s3.amazonaws.com/imageLibrary/samsung_200x200_a17632a44caa.png"
                                    alt=""></a>
                            <a href=""> <img src="https://cshprod.s3.amazonaws.com/imageLibrary/oneplus_200x200_a89743874574.png"
                                    alt=""></a>
                            <a href=""><img src="https://cdn.shopify.com/s/files/1/0083/6380/2720/files/gionee-logo.svg" alt=""></a>
                            <a href=""> <img src="https://cdn.shopify.com/s/files/1/0083/6380/2720/files/motorola-logo.png" alt=""></a>
                            <a href=""><img src="https://cdn.shopify.com/s/files/1/0083/6380/2720/files/mi-logo.png" alt=""></a>
                            <a href=""><img src="https://cshprod.s3.amazonaws.com/imageLibrary/oppo_200x200_8456cca0cb1d.png"
                                    alt=""></a>
            
                        </div>
                    </div>
                </div>

            </div>
            .
            <div class="list-product">
                <div class="select-product">
                    <div class="select-product-left">
                        <span>Ưu tiên xem:</span>
                     
                        <a class="sortProduct"  
                        @if (isset($_GET['colum']) && $_GET['colum'] == 'id' && $_GET['type'] == 'desc')
                      
                        style="background-color: #cb1c22;  color: white; "  
                        @endif
                        @if (!isset($_GET['colum']))
                      
                        style="background-color: #cb1c22;  color: white; "  
                        @endif
                
                        href="Javascript:0" data-color="1"  id="sort-1"  data-colum="id" data-type="desc">Sản phẩm mới nhất</a>

                        <a class="sortProduct"  
                        @if (isset($_GET['colum']) && $_GET['colum'] == 'id' && $_GET['type'] == 'asc')
                          
                        style="background-color: #cb1c22;  color: white; "  
                        @endif
                        href="Javascript:0"  data-color="2" id="sort-2"   data-colum="id" data-type="asc">Sản phẩm cũ nhất </a>


                        <a class="sortProduct"
                        @if (isset($_GET['colum']) && $_GET['colum'] == 'price' && $_GET['type'] == 'desc')
                          
                        style="background-color: #cb1c22;  color: white; "   
                        @endif
                        href="Javascript:0"  data-color="3" id="sort-3"  data-colum="price" data-type="desc">Giá từ cao đến
                            thấp</a>

                        <a class="sortProduct"
                        
                        @if (isset($_GET['colum']) && $_GET['colum'] == 'price' && $_GET['type'] == 'asc')
                    
                        style="background-color: #cb1c22;  color: white; "  
                        @endif
                        href="Javascript:0"  data-color="4" id="sort-4"  data-colum="price" data-type="asc">Giá Từ thấp đến
                            cao</a>




                    </div>
                </div>
                <div class="show-list-product">

                    @foreach ($data['products'] as $product)

                    <div class="product-info">
                        <a href="{{ route('detail-product', $product['id']) }}"> <img src="{{ asset('/images/productImages/'. $product['image']['url'] ) }}" alt=""></a>
                      <div class="add-cart">
                        <div class="add" >
                            <div style="width: 100%;margin-top: 5px;">
                                <a class="addToCart" href="" data-url="{{ route('addToCart', $product['id']) }}" ><span>Add To Cart</span></a>
                            </div>
                        </div>
                      </div>
                        <div class="product-name">
                            <span>{{ $product['name'] }} </span>
                        </div>
                        <div class="product-price">
                            <span>$  {{ number_format($product['price'],0,',') }} </span>
                        </div>
                        
                    </div>
                    @endforeach

                </div>

                <div class="take-product">
                    @for ($i = 1; $i <= ceil($data['count']/12); $i++) 
                    <a href="Javascript:0" 
                    @if(isset($_GET['page']) && $_GET['page'] == $i) 
        
                    style="background-color:black;color:white;;"
                    @else
                    @if(!isset($_GET['page']) && $i == 1)
                    style="background-color:black;color:white;"
                    @endif
                    @endif
                    
                    class="pagingProducts" data-page="{{$i}}"  id="page-{{$i}}"> {{$i}} </a>             
                        
                    @endfor


                </div>

            </div>
        </div>
        <div class="menu-categories" style="margin-bottom: 400px;margin-top: 35px;">
            <h3 style="color: orange;font-weight: bold">Lọc Sản Phẩm</h3>


            <div class="redirect-categories">
                @if(isset($category['category']))
                <div class="filter-price" style="margin-top:20px;">
                    <a href="">Lọc Sản phẩm</a>
                    <label class="container" style="font-weight: bold">Tất cả
                        <input type="radio" class="categoryProducts"
                    
                        name="radio1" data-cate="all" checked>
                        <span class="checkmark"></span>

                    </label>
                    @foreach ($category['category'] as $cate)
                        
                    <label class="container">{{$cate['name']}}
                        <input type="radio" class="categoryProducts"
                        @if(isset($_GET['cate']) && $_GET['cate'] == $cate['id'] )
                        checked
                        @endif
                        
                        name="radio1" data-cate="{{$cate['id']}}" >
                        <span class="checkmark"></span>

                    </label>
                    @endforeach
                </div>
                @endif
                <div class="add-product-checkbox">

                    <a  href="Javascript:0">Hãng sản xuất</a>

                    @if (isset($_GET['brands']))
                        <?php $br = explode(',', $_GET['brands']); ?>
                    @endif
                    <div class="add-brands">
                    @foreach ($category[0]['brands'] as $brand)
                  
                    <label class="container"> <label for="">{{ $brand['name'] }}</label>
                    <input type="checkbox" class="brandProducts" id="brand" 
                    @if (isset($br))
                    @if (in_array($brand['id'], $br))
                        checked
                    @endif
                    @endif
                    value="{{ $brand['id'] }}">
                    <span class="checkmark"></span>
                    </label>
            
                    @endforeach
                </div>

                    <div class="filter-price" style="margin-top:20px;">
                        <a href="">Lọc giá</a>
                        <label class="container">Tất cả
                            <input type="radio" class="filterPrice" name="radio" data-min="1" data-max="2" @if (!isset($_GET['min']))
                            checked
                            @endif
                            >
                            <span class="checkmark"></span>

                        </label>
                        @for ($i = 1; $i <= 9; $i++)
                            <label class="container">Từ {{ ($i -1) * 2000 + 1 }} - {{ $i * 2000 }}
                                <input type="radio" class="filterPrice" name="radio" data-min="{{ ($i -1 ) * 2000  + 1}}"
                                    data-max="{{ $i * 2000 }}" @if (isset($_GET['min']) && isset($_GET['max']))
                                @if ($_GET['min'] == ($i - 1) * 2000 + 1 && $_GET['max'] == $i * 2000)
                                    checked
                                @endif
                        @endif

                        >
                        <span class="checkmark"></span>

                        </label>
                        @endfor
                        <label class="container">Trên 18001
                            <input type="radio" class="filterPrice" name="radio" data-min="18001" data-max="999999999">
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
    $(document).on('click','.brandProducts', function(e){
        var url = new URL(window.location);

        var brands = Array.from(document.querySelectorAll("#brand"))
                .filter(checkbox => checkbox.checked)
                .map(checkbox => checkbox.value);

            
        
                url.searchParams.set('brands', brands.toString());
              var page =  url.searchParams.get('page');
                if(page !== 'null'){
                    url.searchParams.delete('page');
                }
              
            if (url.searchParams.get('brands') == '') {
                url.searchParams.delete('brands');
            }
            window.history.pushState({}, '', url);
            $.ajax({
                type: 'get',
                url:url,
                success: function(data) {
                    LoadProduct(data);
                    paging(data);
                }
            });

    });
</script>

<script>
    $(document).on('click' ,'.filterPrice' ,function(){
        var url = new URL(window.location);
            var min = $('input[name="radio"]:checked').data("min");
            var max = $('input[name="radio"]:checked').data("max");

                url.searchParams.set('min', min, );
                url.searchParams.set('max', max, );
                url.searchParams.delete('take');
                var page =  url.searchParams.get('page');
                if(page !== 'null'){
                    url.searchParams.delete('page');
                }
            if (min == 1 && max == 2) {
                url.searchParams.delete('min');
                url.searchParams.delete('max');
            }
            window.history.pushState({}, '', url);
            $.ajax({
                type: 'get',
                url:url,
                success: function(data) {
                    LoadProduct(data);
                    paging(data);
                }
            });
    });
</script>
<script>
    $(document).on('click', '.sortProduct', function(e){
            var url = new URL(window.location);
            var colum = $(this).data("colum");
            var type = $(this).data("type");
            var color = $(this).data("color");
            $('.sortProduct').css({"background-color": "white" ,"color": "#8392a5"});
            $('#sort-'+color).css({
            "background-color": "#cb1c22","color": "white"});

            if (typeof colum !== 'undefined' && typeof type !== 'undefined') {
                url.searchParams.set('colum', colum, );
                url.searchParams.set('type', type, );

            }
            window.history.pushState({}, '', url);
            $.ajax({
                type: 'get',
                url:url,
                success: function(data) {
                    LoadProduct(data);
                    paging(data);
                }
            });
    });
</script>

<script>
    $(document).on('click', '.pagingProducts',function(){
        var id = $(this).attr('id');
        $('.pagingProducts').css({
            "background-color":"white",
            "color":"rgb(128, 126, 126)"
        });
 
         $("#"+id).css({
            "background-color":"black",
            "color":"white"
        });
 
        var url = new URL(window.location);
        var page = $(this).data("page");
            url.searchParams.set('page', (page));
            window.history.pushState({}, '', url);
            $.ajax({
                type: 'get',
                url:url,
                success: function(data) {
                    LoadProduct(data);

                }
            });
    });
</script>

<script>
    $(document).on('click','.categoryProducts', function(e){
        var url = new URL(window.location);
        var cate = $(this).data('cate');
        var brands =  url.searchParams.get('brands');
        var page =  url.searchParams.get('page');
        url.searchParams.set('cate', cate);
        if(cate === 'all'){
        url.searchParams.delete('cate' );
            }
            if(brands !== 'null'){
                    url.searchParams.delete('brands');
                }
            if(page !== 'null'){
                    url.searchParams.delete('page');
                }
            window.history.pushState({}, '', url);
            $.ajax({
                type: 'get',
                url:url,
                success: function(data) {
                    LoadProduct(data);
                    paging(data);
                    //load brands
                    var brands = '';
                    $.each(data.products.brands, function(key,brand){
                        $.each(brand.brands, function(key,brand){
                     brands +=   '<div class="add-brands">' +
                    '<label class="container"> <label for="">'+ brand.name + '</label>' +
                    '<input type="checkbox" class="brandProducts" id="brand" value="'+ brand.id +'">' +
                    '<span class="checkmark"></span></label></div>'              
                
                    });
                    });
                    $('.add-brands').html(brands);

                }
            });
    });
</script>
   


<script>
    function LoadProduct(data){

                    var html = ''
                    $.each(data.products.products, function(key, product) {

                        html +=
                      
                    '<div class="product-info">' +
                       ' <a href="http://localhost/sell-phone/public/product/'+product.id+' "> <img src="http://localhost/sell-phone/public/images/productImages/' + product.image.url + '" alt=""></a>' +
                      '<div class="add-cart">'+
                        '<div class="add" >'+
                            '<div style="width: 100%;margin-top: 5px;">' +
                                '<a class="addToCart" href="" data-url="http://localhost/sell-phone/public/cart/'+ product.id +'" ><span>Add To Cart</span></a>' +
                           ' </div></div> </div>' +
                        '<div class="product-name">' +
                        ' <span> '+product.name+' </span></div>' +
                        '<div class="product-price">' +
                            '<span>$  '+ formatNumber(product.price) +' </span>' +
                        '</div></div>'

                    });
                    $('.show-list-product').html(html);
                    // ---------------------- load count ----------------------------------------------------
                    var countHtml ='';
                    countHtml += ' <span>(' + data.count + ' sản phẩm )</span>' 
                    $('.count-product').html(countHtml);

                   
                   

   
    }
    function paging(data){
        var count = Math.ceil(data.count / 12);
                    var page = '';

        page +=  '<a href="Javascript:0" style="background-color:black;color:white;" class="pagingProducts" data-page="1"  id="take-1">1</a>'
                    for (var i = 2; i <= count; i++) {
                        page +=
         '<a href="Javascript:0" class="pagingProducts" data-page="' + i + '"  id="take-' + i + '">' + i + '</a>'
                    }
                    $('.take-product').html(page);
    }
</script>



































<script>
    $('.owl-carousel').owlCarousel({

        loop: true,
        margin: 10,
        nav: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1024: {
                items: 7
            }
        }
    });
</script>

@endsection
