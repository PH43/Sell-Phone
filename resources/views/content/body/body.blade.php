@extends('content/template/template')
@section('tittle')
    Trang chủ
@endsection
@section('body')

    <style>
        .body img {
            width: 100%;

            object-fit: cover;
            float: left;

        }

        .show-product {
            margin-top: 100px;
            clear: both;
            width: 90%;
            margin-left: 5%;
            text-align: center;
            height: auto;


        }

        .show-product span {
            font-size: 20px;
            margin-top: 20px;
            display: inline-block;
            padding: 0px 20px;
            font-weight: 500;
        }

        .show-product span a {
            font-size: 20px;
            text-decoration: none;
            color: rgb(117, 117, 117);

        }

        .show-product a {
            display: block;
            font-size: 40px;
            font-weight: 600;
            letter-spacing: 1.2px;
            line-height: 26.4px;
            font-family: roboto;
        }

        .buy-product {
            margin-top: 40px;
            width: 100%;
            height: auto;
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

            position: absolute;

            width: 191px;
            opacity: 0;
            transition: all 0.5s;
        }


        .add a {
            color: white;
            transform: translateY(-10px);
        }

        .product-info:hover .add {
            transform: translateY(-30px);
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

        .categories-show {

            margin-top: 120px;
            width: 90%;
            margin-left: 5%;
            height: auto;

        }

        .categories-info {
            margin-top: 30px;

            width: 31%;
            transform: translateY(20px);
            height: auto;
            float: left;
            margin-left: 2%;
        }



        .categories-info img {
            width: 100%;
            height: 217px;

        }

        .categories-name span {

            font-family: Montserrat;
            font-weight: 600;
        }


        .categories-brands {
            clear: both;
            width: 100%;

            background-color: #fafafa;
            height: 268px;
            margin-top: 100px;
        }

        .categories-brands-show {
            width: 90%;
            margin-left: 5%;
            transform: translateY(47px);
            height: auto;
        }

        .categories-brands-show h5 {
            font-size: 20px;
            float: left;
            font-family: Montserrat;
            font-weight: 600;
        }

        .categories-brands-show img {
            clear: both;
            width: 157px;
            height: 137px;
            ;
            margin-top: 20px;
            box-shadow: rgba(155, 154, 154, 0.2) 0px 1px 5px 0px;
            background-color: white;
            border-radius: 10px;
            margin-right: 10px;
        }

        .owl-carousel {
            clear: both;
        }

        .categories-brands-show a {
            text-decoration: none;
            float: right;
        }

        .servirce {
            width: 90%;
            height: 270px;
            margin-left: 5%;
            background-color: white;
        }

        .servirceOrder1 {
            float: left;

            width: 300px;
            margin-top: 40px;
            height: auto;
            ;

        }

        .servirceOrder1 span {
            font-size: 13px;
            transform: translateY(10px);
            font-weight: 500;
            text-transform:
                uppercase;
        }

        .servirceOrder1 img {
            width: 100px;
            height: 100px;
            border-radius: 8px;
            background-color: #f7f7f7;
        }

        .text {
            margin-bottom: 50px;
            width: 100%;
            height: auto;

            background-color: #fafafa;
        }

        .show-text {
            width: 100%;
            margin-top: 10px;
            height: 60px;
            border-bottom: 0.5px solid rgb(68, 68, 68);
            padding: 20px 0px;
        }

        .show-text span {
            font-weight: 700;
            letter-spacing: 0.6px;
            font-size: 17px;
            margin-left: 5%;
            color: black;
        }

        .show-text a {
            text-decoration: none;
        }

        .all-text {
            height: auto;
            padding-bottom: 5px;
            margin-top: 30px;
            margin-left: 5%;
            margin-right: 5%;

        }

        .all-text p {
            font-size: 14px;
            line-height: 20px;
            font-family: Montserrat;
        }

        #category-1 {
            color: #c27b43;
        }

    </style>

    <div class="body owl-carousel ">

        <img src="//cdn.shopify.com/s/files/1/0083/6380/2720/files/Generic_Banner_3_1_2100x.png?v=1628778236" alt="">
    </div>

    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,


            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                960: {
                    items: 1
                },
                1024: {
                    items: 1,


                }
            }
        });
    </script>
    <div class="show-product">
        <a>You want it? We got it</a>
        @foreach ($categories as $b)
            <span><a href="Javascript:0" 
                class="change-product" 
                id="category-{{ $b['id'] }}"
                data-url="{{ route('home-product-category', $b['id']  ) }}">
                
                {{ $b['name'] }}</a></span>
        @endforeach

        <div class="buy-product">

            @foreach ($products as $p)
                <div class="product-info">
                    <a href=""> <img src="{{ asset('/images/phone1.jpg') }}" alt=""></a>
                    <div class="add">
                        <a href="Javascript:0" onclick="addProductCart()"><span>Add To Cart</span></a>
                    </div>
                    <div class="product-name">
                        <span>{{ $p['name'] }} </span>
                    </div>
                    <div class="product-price">
                        <span>{{ $p['price'] }}$</span>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <script>
        $('.change-product').click(function() {
            let getid = $(this).attr('id');
         
            let changeProduct = $(this).data("url");

            $.ajax({
                type: "get",
                url: changeProduct,
                success: function(data) {
                    var html = ''
                    $.each(data, function(key, data) {
                    html += '<div class="product-info">' +
                   ' <a href=""> <img src="{{ asset('/images/phone1.jpg') }}" alt=""></a>'+
                   ' <div class="add">'+
                    '<a href="Javascript:0" onclick="addProductCart()"><span>Add To Cart</span></a></div>'+
                    '<div class="product-name">'+
                    '<span> ' + data.name + ' </span></div>'+
                    '<div class="product-price">'+
                    '<span>' + data.price + '$</span></div></div>'

                    });
                    $('.buy-product').html(html);
                    $('.change-product').css('color', '#757575')
                    $('#' + getid).css('color', '#c27b43');

                }
            });

        });
    </script>
    <hr style="clear: both;  transform: translateY(70px);width: 100%;height: 1px;">

    <div class="categories-show">
        <h5>Shop By Categories</h5>

        <div class="categories-info">

            <a href="">

                <img src="//cdn.tgdd.vn/2021/08/banner/appleDT-390x210.png" alt="">

            </a>
            <div class="categories-name">
                <span>Refurbished Mobile Phones</span>
            </div>
        </div>
        <div class="categories-info">

            <a href="">

                <img src="//cdn.tgdd.vn/2021/08/banner/samsung-390-210-390x210-1.png" alt="">

            </a>
            <div class="categories-name">
                <span>Refurbished Mobile Phones</span>
            </div>
        </div>
        <div class="categories-info">

            <a href="">

                <img src="//cdn.tgdd.vn/2021/08/banner/Laptop2-390x210.png" alt="">

            </a>
            <div class="categories-name">
                <span>Refurbished Mobile Phones</span>
            </div>
        </div>

        <div class="categories-info">

            <a href="">

                <img src="//cdn.tgdd.vn/2021/09/banner/dongho-780x420.jpg" alt="">

            </a>
            <div class="categories-name">
                <span>Refurbished Mobile Phones</span>
            </div>
        </div>
        <div class="categories-info">

            <a href="">

                <img src="//cdn.tgdd.vn/2021/08/banner/fdgvdfg-780x420-1.jpg" alt="">

            </a>
            <div class="categories-name">
                <span>Refurbished Mobile Phones</span>
            </div>
        </div>
        <div class="categories-info">

            <a href="">

                <img src="//cdn.tgdd.vn/2021/09/banner/Giadụng-desktop-780x420.jpg" alt="">

            </a>
            <div class="categories-name">
                <span>Refurbished Mobile Phones</span>
            </div>
        </div>


    </div>

    <div class="show-product-category">

    </div>
    <div style="width: 100%; height:40px;clear: both;">

    </div>
    <div class="categories-brands">

        <div class="categories-brands-show">
            <h5>Popular Brands</h5>
            <a href="">view all</a>
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

    <div class="servirce">
        <h5>Our Renewal Process</h5>
        <div class="servirceOrder1">
            <img src="https://cdn.shopify.com/s/files/1/0083/6380/2720/files/phone-delete.svg" alt=""><br>
            <span>1 DATA CLEANSING</span>
        </div>
        <div class="servirceOrder1">
            <img src="https://cdn.shopify.com/s/files/1/0083/6380/2720/files/phone-setting.svg" alt=""><br>
            <span>2 EXCHANGE OF COMPONENTS</span>
        </div>
        <div class="servirceOrder1">
            <img src="https://cdn.shopify.com/s/files/1/0083/6380/2720/files/phone-star.svg" alt=""><br>
            <span>3 EXTERNAL PREPARATION</span>
        </div>
        <div class="servirceOrder1">
            <img src="https://cdn.shopify.com/s/files/1/0083/6380/2720/files/phone-rs.svg" alt=""><br>
            <span>4 PROVISION</span>
        </div>
    </div>
    </div>


    <div class="text">
        <div class="show-text">
            <a class="add-text" href="javascript:0"> <span> Click Here To Know More <i
                        class="fas fa-plus"></i></span></a>
        </div>
        <div class="all-text">
            <p>Cashify Store offers a lot of services like smartphone buyback, refurbished smartphones, smartphone repairs,
                accessories repair, and mobile phone recycling. We are India’s no. 1 buyer and sellers of second hand mobile
                phones. Using the Cashify Store platform, you can conveniently buy refurbished phones with ease. So that
                every time you visit us, you get all that you need. This makes it the place for the best ONE STOP for
                everything!
                In this store, one will find so much to choose from with the best quality products. This store offers
                smartphone covers, tempered glass, and cable, and chargers for your second-hand smartphones. In addition,
                our store also offers power banks for your phones and laptops. Furthermore, you will also find extremely
                great refurbished laptops to buy from. Our store offers the best quality products with the 32-checkpoint
                quality check. This is the only place one will find the best prices for second hand mobile phones.
                As the pre-owned smartphone market continues growing, we need to have a trustworthy guide where you can do
                it all. Cashify brings you the platform to let you sell, buy and so much more. You can choose to buy from a
                selection of refurbished, unboxed, and pre-owned second-hand mobile from our online e-commerce store. We
                offer free shipping across India with a warranty.
                Refurbished phones are usually a fraction of the price of brand new models, and they typically have the same
                functionality and lifespan. And while buying a second mobile phone might seem like a risky proposition, most
                people have a great experience - here at Cashify Store!
                Our team tries to bring you the best 2nd hand mobile phone experience. Our belief is to be big on quality,
                small on price. Let us also give you the assurance of a hassle-free service - from ordering to receiving,
                our process is 100% smooth.
                We bring in your affordable and best-priced second hand mobile straight to your home. The market for these
                kinds of second hand mobile phones is huge. Considering how we end up having new entries and wanting to buy
                those newer editions almost immediately. However, one can simply not put in so much money for a model -
                which is available as a 2nd hand mobile phone - but almost new - barely used.
                We, at Cashify Store, try our best with giving you the best experience when buying second hand phones. Every
                smartphone goes through 32 rigorous tests. No compromise on quality. These second hand phones before
                becoming available to buy go through some tests mentioned below:
                Functional- Bluetooth, Microphone, Flashlight, Screen Pixel, Ear-piece, Jack Check, Speaker Test, Volume
                Button Check, WiFi, Call Test, and GPS.
                We also check the second-hand phone for their battery health - Serial Number Capture, Actual Design
                Capacity, Temperature Range Check, Cycle Count Check, Manufacturers Date, USB Post Cosmetic, Full Charge
                Capacity, and Battery state of Health inspection.
                In addition, it also has its cosmetic check-up done - so that the 2nd hand mobile phone looks just as new as
                a manufacturer bought-one. In the cosmetic check-up, it goes through - Power Key Cosmetic, Device Bezel
                Cosmetic, USB Cosmetic, HeadJack Cosmetic, and USB Post Cosmetic.
                Cashify Store does not forget the device information of such 2nd hand phones. We do Manufacturer, Operating
                System, Serial Number, Model Number, Device Storage, Device Color, Wifi Address, and IMEI check.
                With this exceptionally well-done 32 checkups on the second hand mobile phone - there is no chance we give
                you a faulty experience. However, even if in case it happens - we give out a 6-month warranty to get you
                covered with these 2nd hand phones.
                It comes at a minimal price with a quality that’s as good as new so that you do not have to compromise with
                your smartphone experience.
                Moreover, we give you options to choose from our range of 2nd hand phones. You can choose from PhonePro
                Certified, PhonePro Refurbished Superb and PhonePro Refurbished Good. The difference between these three
                comes with some factors.
                For instance, PhonePro certified brings second hand mobile phones with minimal scratches, fully functional,
                and tries to give original accessories and boxes if it is available. However, it also promises that it will
                be barely used to give you an almost new experience.
                Whereas, with the Superb option, these second hand phones have just up to 2 scratches and are fully
                functional. In addition, it is minimally used and gives the PhonePro box along with a compatible charger and
                cable.
                On the other hand, Refurbished Good options give us 2nd hand mobile with just up to 5 scratches/dents.
                However, it promises to be fully functional and comes with a PhonePro box along with a compatible charger
                and cable.
                The next question that arises as soon as we buy a second hand phone - is whether we get the original
                accessories or not?
                Although it is subject to availability and the option you choose to buy from. It does give you a PhonePro
                approved adapter, USB cable, and an invoice. In addition to all these, the 2nd hand mobile phones come with
                a 6-month warranty card.
                Cashify lets you sell, buy, repair, and accessorize your smartphones. This is a one-stop solution with a
                quick and hassle-free experience. We offer you premium products with our trained professionals, with amazing
                prices and guaranteed safety. We are India’s largest and first online mobile experts.
                So, why don’t you jump in and look into the store to find what suits you best without putting in too much
                money?</p>
        </div>
    </div>


    <script>
        $(".all-text").toggle();
        $('.add-text').click(function() {
            $('.all-text').toggle(500);
            $('.show-text').css('border', '0px');
            $('.text').css('border-bottom', '1px solid rgb(68, 68, 68)');
        });
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
