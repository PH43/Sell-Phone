@extends('content/template/template')
@section('tittle')
    Giỏ hàng
@endsection
@section('body')
    <style>
        .cart {
            width: 96%;
            margin-left: 2%;
            height: auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: rgba(155, 154, 154, 0.2) 0px 1px 5px 0px;
            margin-bottom: 50px;
            padding: 60px 0px;
        }

        .cart span {
            display: block;
            opacity: 0.8;
        }

        .name-page {
            margin-left: 2%;
        }

        .cart h5 {
            line-height: 60px;
            display: block;
            font-size: 26px;
            font-weight: 700;
        }

        .show-cart {
            margin-top: 2%;
            width: 98%;
            margin-left: 1%;
        }

        .payment {
            width: 100%;
            margin-top: 50px;
        }

        .category-payment {
            width: 50%;
            display: inline-block;

            padding: 20px;

        }

        .shiping {
            width: 57%;
            display: inline-block;
        }

        .shiping img {
            width: 90%;
            float: left;
            object-fit: cover;
        }

        .payment-format {
            width: 42%;
            display: inline-block;


        }

        .payment-format h5 {
            font-size: 16px;
        }

        .payment-format li {

            list-style: none;
        }

        .payment-format li span {
            line-height: 40px;
        }

        .buy-product a {
            padding: 8px 240px;
            color: black;
            text-decoration: none;
            border: 2.5px solid rgb(165, 165, 165);
            font-weight: 600;
            background-color:


        }

        .buy-product {
            text-align: center;
            width: 100%;
            margin-top: 60px;
        }

        .payment-details {

            margin-top: 60px;
            height: 400px;
            float: right;
            line-height: 10px;
            width: 35%;
            text-align: right
        }

        .name-info {
            float: right;
            margin-right: 20px;
        }

        .name-info span {
            text-align: center;
            display: block;
            margin-right: 10px;
        }


        .payment-cart {
            clear: both;
            width: 100%;
            line-height: 150px
        }

        .payment-cart a {


            text-decoration: none;
            padding: 8px 120px;
            color: red;
            margin-right: 20px;
            text-decoration: none;
            border: 2.5px solid rgb(253, 92, 92);
            font-weight: 600;
        }

        .order-product {

            width: 40%;
            overflow-Y: scroll;
            height: 520px;
            text-align: center;
            margin-top: 2%;
            margin-left: 32%;
            display: none;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

        }

        .order-product::-webkit-scrollbar {
            width: 2px;
            background-color: #F5F5F5;
        }

        .enter-info span {

            text-shadow: 5px 5px 10px white;
            color: #8b8b8b;
            background-color: white;
            display: inline-block;
            transform: translateY(10px);
            font-size: 15px;
            margin-left: 8%;

            opacity: 0;



        }


        .enter-info h5 {
            margin-top: 10px;
            text-align: center;
            color: red;
            letter-spacing: 2px;

            text-shadow: 5px 5px 10px violet;
            font-size: 25px;
            font-weight: 800;
        }

        .enter-info {

            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

            width: 100%;
            opacity: 1;
            margin-top: 1%;
            display: inline-block;
            padding: 20px 0px;
            background-color: white;
            height: auto;
            padding-bottom: 10px;
        }

        .input {
            width: 100%;
            height: 70px;
            text-align: left;
        }

        .input select {
            border: 2px solid black;
            height: 45px;
        }

        .input input {
            margin-left: 5%;
            background-color: white;
            border: 2px solid black;
            height: 45px;


            width: 90%;

        }

        .input textarea {
            margin-left: 5%;
        }





        label.error {
            display: block;
            color: red;
            text-align: center;

            padding-bottom: 20px;

        }

        .address-order {
            width: 90%;

            margin-left: 5%;
        }

    </style>
    <div class="cart">
        <div class="name-page">
            <span>Trang chủ / Giỏ hàng</span>
            <h5>Giỏ Hàng</h5>
            <div class="message">
                @if (!empty($message))
                    {{ $message }}
                @endif
            </div>
        </div>
        @php $total = 0; @endphp
        @if (!empty($cart['cart']))
            <div class="show-cart">
                <table class="table  table-hover">
                    <thead>
                        <tr>
                            <th scope="col-2">Ảnh</th>
                            <th scope="col-4">Sản phẩm</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Gía sản phẩm</th>
                            <th scope="col">Tổng giá tiền</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($cart['cart'] as $product)
                            @php
                                $total += $product['qty'] * $product['price'];
                            @endphp

                            <tr class="cart-{{ $product['id'] }}">
                                <th scope="row"><img style="width: 100px;height: 100px"
                                        src=" {{ asset('images/productImages/' . $product['image']) }}" alt=""> </th>
                                <td>{{ $product['name'] }}</td>
                                <td><input class="qty" data-cartid="{{ $product['id'] }}"
                                        data-price="{{ $product['price'] }}" style="width: 40px" type="number"
                                        value="{{ $product['qty'] }}" id="qty-{{ $product['id'] }}" min="1" max="10"></td>
                                <td> ${{ number_format($product['price'], 0, ',') }}</td>
                                <td class="total-price-{{ $product['id'] }}">
                                    <span>${{ number_format($product['qty'] * $product['price'], 0, ',') }} </span>
                                </td>
                                <td><a style="text-decoration: none; color: red;" 
                                    href="" onclick="deleteCart({{ $product['id'] }})"><i 
                                    style="transform: translateX(8px);font-size: 20px;" 
                                    class="fas fa-times"></i></a></td></tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            @else
            <span style="margin-left: 2%;">Không có sản phẩm trong giỏ hàng của bạn</span>
         
        @endif
        <div class="message" style="display: none;margin-left: 2%;">
            <span > Kiểm tra email để xem giỏ hàng của bạn </span>
            <a href="https://mailtrap.io/inboxes/1507477/messages/2442154038">https://mailtrap.io/inboxes/1507477/messages/2442154038</a>
        </div>
            <div class="payment">
                <div class="category-payment">
                    <div class="shiping">
                        <img src=" {{ asset('images/meo-mua-hang-mien-phi-ship-shopee-5.jpg') }}" alt="">

                    </div>
                    <div class="payment-format">
                        <li>

                            <h5>Hình Thức Thanh Toán</h5>
                        </li>
                        <li> <span>Thanh toán khi nhận hàng</span> </li>
                        <li> <span>Thanh toán bằng thẻ ATM</span> </li>
                        <li> <span>Thanh toán bằng thẻ Visa,Master Card</span> </li>
                    </div>
                    <div class="buy-product">
                        <a href="{{ route('home') }}">Tiếp tục mua hàng</a>
                    </div>
                </div>
                <div class="payment-details">
                    <div class="name-info">


                        <span>TỔNG THANH TOÁN <div class="total">
                                <h5>${{ number_format($total, 0, ',') }}</h5>
                            </div></span>
                        <span>Giao hàng & thuế được tính khi thanh toán</span>
                    </div>
                 
                    <div class="payment-cart">
                        <a href="" class="order-products" @if(!empty($cart['cart'])) id="1"  @endif >Đặt hàng</a>
                    </div>
                </div>
            </div>
    
      
    </div>


    <div class="body fixed-top"
        style="  display: none;;width: 100%;height: 100%;background-color: rgb(250, 250, 250);opacity: 0.6">

    </div>

    <div class="fixed-top form-order">
        <div class="order-product">
            
            <div class="enter-info  ">
                <a href="javascript:0"
                    style="float:right;font-size: 20px;;color: black;margin-right: 10px;transform: translateY(-20px)"
                    id="close-form-order"><i class="fas fa-times"></i></a>
                <h5>Mua sản phẩm</h5>
             
                <h6 style="line-height: 40px;">Để mua sản phẩm, vui lòng thêm địa chỉ nhận hàng</h6>
               
                <form method="post" action="{{ route('order') }}" id="order-form" style="text-align: center;">
                    @csrf

                    <div id="toggle">

                        <div class="input">
                            <span for="" class="name" @if (Auth::check())  style="opacity: 1;"    @endif>Nhập họ và tên</span>
                            <input type="text" name="customer_name" class="info" id="name"
                                placeholder="Vui lòng nhập họ" @if (Auth::check()) value="{{ Auth::user()->name }}"@endif>

                        </div>
                        <div class="input">
                            <span class="email" @if (Auth::check())  style="opacity: 1;"    @endif>Email</span>
                            <input type="text" class="info" name="email" id="email" placeholder="Email"
                                @if (Auth::check())value="{{ Auth::user()->email }}"@endif>
                        </div>
                        <div class="input">
                            <span class="numberphone" @if (Auth::check())  style="opacity: 1;" @endif>Số điện thoại</span>
                            <input type="text" class="info" name="numberphone" id="numberphone"
                                @if (Auth::check())value="0{{ Auth::user()->number_phone }}"@endif placeholder="Số điện thoại">
                        </div>
                        <div class="input">
                            <span class="provinces">Thành phố</span>
                            <select style="width: 90%;margin-left: 5%;" id="provinces" class="form-select"
                                aria-label="Default select example" name="provinces" placeholder="Address">
                                <option value="" selected>Thành Phố</option>
                                @foreach ($province as $province)
                                    <option value="{{ $province['name'] }}">

                                        {{ $province['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="districts">

                        </div>
                        <div class="wards">

                        </div>
                        <div class="address-details">

                        </div>
                        <div class="input" id="detail" style="display: none;">
                            <span for="" class="addressDetails">Địa chỉ</span>
                            <input type="text" class="info" name="addressDetails" id="addressDetails"
                                placeholder="Địa chỉ chi tiết">
                        </div>

                        @if (isset(Auth::user()->id))  <input type="hidden" name="user_id" id="user_id" placeholder="Password" value="{{ Auth::user()->id }}">  @endif

                        <div class="input">
                            <span for="" class="message">Lời nhắn</span>
                            <textarea class="info" name="message" id="message" placeholder="Lời nhắn" rows="3.5"
                                cols="67"></textarea>
                        </div>
                    </div>
                    <input style="margin-top: 50px" type="submit" class="requestorder btn btn-primary" value="hoàn thành"
                        class="btn btn-danger">
                        <div  style="width: 100%;text-align: left;margin-top: 20px;">
                           <div id="example1"></div>
                          </div>
                </form>
            </div>
        </div>
    </div>

  
    <script>
        // ------------------------------Show Span-------------------------------------------------------------------
        $('.info').keyup(function() {
            var id = $(this).attr('id');
            if ($(this).val().trim().length > 0) {
                $('.' + id).css("opacity", 1);
            } else {
                $('.' + id).css("opacity", 0);
            }

        });
    </script>

    <script>
        // ------------------------------Validation Cart--------------------------------------------------
            $("#order-form").validate({
                rules: {
                    "customer_name": {
                        required: true,
                        minlength: 3,
                        maxlength: 24,
                    },
                    "numberphone": {
                        required: true,
                        minlength: 9,
                        maxlength: 12,
                        number: true,
                    },
                    "email": {
                        required: true,
                        email: true,
                    },
                    "address": {
                        required: true,
                    },
                    "provinces": {
                        required: true,
                    },
                    "districts": {
                        required: true,
                    },
                    "wards": {
                        required: true,
                    },
                    "message": {
                        maxlength: 255
                    }

                },
                messages: {
                    "customer_name": {
                        required: "Không được để trống",
                        minlength: "Họ và tên phải lớn hơn 3 ký tự",
                        maxlength: "Họ và tên phải ít hơn 24 ký tự",
                    },
                    "numberphone": {
                        required: "Không được để trống",
                        minlength: "Số điện thoại không hợp lệ",
                        maxlength: "Số điện thoại không hợp lệ",
                        number: "Số điện thoại không hợp lệ",
                    },
                    "email": {
                        required: "Không được để trống",
                        email: "Email không hợp lệ",
                    },
                    "address": {
                        required: "Không được để trống",
                    },
                    "provinces": {
                        required: "Không được để trống",
                    },
                    "districts": {
                        required: "Không được để trống",
                    },
                    "wards": {
                        required: "Không được để trống",
                    },
                    "message": {
                        maxlength: "Lời nhắn phải ít hơn 255 ký tự"
                    },

                }

            });
  
    </script>

    <script>
        // ------------------------------Order Product--------------------------------------------------
        $(document).on('click', '.requestorder', function(e) {
            e.preventDefault();
          
            if ($("#order-form").valid()) {
                $("#example1").css({"width": "0px","margin-left": "-10px","height": "10px","background-color": "orange"});
                $("#example1").animate({"width": "100%"}, 5000);

                var name = $("#name").val();
                var province = $("#provinces").val();
                var district = $("#districts").val();
                var wards = $("#wards").val();
                var addressDetails = $("#addressDetails").val();
                var numberphone = $("#numberphone").val();
                var message = $("#message").val();
                var email = $("#email").val();
                var user_id = $("#user_id").val();
                $.ajax({
                    type: "POST",
                    url: "{{ route('order') }}",
                    data: {
                        customer_name: name,
                        provinces: province,
                        districts: district,
                        wards: wards,
                        numberphone: numberphone,
                        addressDetails: addressDetails,
                        message: message,
                        email: email,
                        user_id: user_id,
                        _token: $('input[name=_token]').val()
                    },
                    success: function(data) {

                        $('.body').hide(500);
                        if (data == 1) {
                            alert('Mua hành thành công');
                            // remove table cart
                            $('.show-cart').remove();
                            //send message
                            $('.message').show();
                            // hidden form order
                            $('.order-product').hide(500);
                            // fix total
                            $('.total').html('<h5>0</h5>')
                            // fix button đặt hàng
                     $('.payment-cart').html('<a href="" class="order-products"    >Đặt hàng</a>');
                            //   document.getElementById('order-form').reset();
                        } else {
                            $("#example1").stop();
                            alert(data);
                        }
                    }
                });
            }




        });
    </script>
    <script>
        // ------------------------------Show form Order--------------------------------------------------
        $(document).on('click', '.order-products', function(e) {
            e.preventDefault();
           var id = $(this).attr('id')

           if( typeof id  !== 'undefined') {
            $('.order-product').show(500);
            $('.body').show(300);
           }else{
               alert('Không có sản phẩm trong giỏ hàng của bạn');
           }
      

        });
        $('#close-form-order').click(function() {
            $('.order-product').hide(500);
            $('.body').hide(200);
        });
    </script>
    <script>
        function deleteCart(id) {
            // ------------------------------Delete cart--------------------------------------------------
            event.preventDefault();
            $.ajax({
                type: "get",
                url: "http://localhost/sell-phone/public/cart/delete/" + id,
                success: function(data) {
                    $("#cart-" + id).remove();
                    $('.cart-' + id).remove();
                    var totalPrice = 0;
                    $.each(data.cart, function(key, data) {
                        totalPrice += (data.qty * data.price);
                    });

                    $('.total').html('<h5> $' + formatNumber(totalPrice) + ' </h5>');

                    if (data.cart.length <= 0) {
                        $('.show-cart').remove();
                        $('.payment-cart').html('<a href="" class="order-products"    >Đặt hàng</a>');
                        $('.message').html('Không có sản phẩm trong giỏ hàng của bạn');
                    }
                }
            })
        }
    </script>


    <script>
        // ------------------------------Update cart--------------------------------------------------
        $(document).on('change', '.qty', function(e) {
            var qty = $(this).val();
            var cartId = $(this).data("cartid");
            var price = $(this).data("price");
            if (qty > 10) {
                alert("Bạn chỉ có thể mua ít hơn 11 sản phẩm");
                $("#qty-" + cartId).val(10);
                updateCart(cartId, 10, price);
            } else if (qty < 1) {
                deleteCart(cartId);
            } else {
                updateCart(cartId, qty, price);
            }
        });
    </script>


    <script>
        function updateCart(cartId, qty, price) {
            // ------------------------------Request Update Cart--------------------------------------------------
            $.ajax({
                type: "get",
                url: "http://localhost/sell-phone/public/cart/" + cartId + "/update/" + qty,
                success: function(data) {
                    $('.total-price-' + cartId).html('<span> $' + formatNumber(qty * price) + '</span>');
                    var totalPrice = 0;
                    $.each(data.cart, function(key, data) {
                        totalPrice += (data.qty * data.price);
                    });
                    $('.total').html('<h5> $' + formatNumber(totalPrice) + ' </h5>');
                }
            })
        }
    </script>



<script>
    // ------------------------------Quận huyện--------------------------------------------------
    $(document).on('click', '#provinces', function() {
        var name = $(this).val();
        var id = $(this).attr('id')

        if (name != '') {
            $('.' + id).css("opacity", 1);
            $.ajax({
                type: "get",
                url: "http://localhost/sell-phone/public/cart/address/dictrict/" + name,
                success: function(data) {
                    var address = '';

                    address += '<div class="input">' +
                        '     <span class="districts" >Quận,huyện</span>' +
                        '<select style="width: 90%;margin-left: 5%;" name="districts" id="districts" class="form-select"' +
                        'aria-label="Default select example" name="dictricts" placeholder="Address">' +
                        '<option value="" selected>Quận,Huyện</option>'
                    $.each(data[0].districts, function(key, data) {

                        address += '<option  value="' + data.name + '"> ' + data.name +
                            ' </option>'
                    })
                    address += '</select>' +
                        '</div>'

                    $('.districts').html(address);

                }
            });
        }

    });
</script>
<script>
    $(document).on('click', '#districts', function() {
        // ------------------------------Phường Xã--------------------------------------------------
        var name = $(this).val();
        var id = $(this).attr('id')

        if (name != '') {
            $('.' + id).css("opacity", 1);
            $.ajax({
                type: "get",
                url: "http://localhost/sell-phone/public/cart/address/ward/" + name,
                success: function(data) {
                    var address = '';

                    address += '<div class="input">' +
                        '     <span class="wards" >Phường,Xã</span>' +
                        '<select style="width: 90%;margin-left: 5%;" name="wards" id="wards" class="form-select"' +
                        'aria-label="Default select example"  placeholder="Address">' +
                        '<option value="" selected>Phường,Xã</option>'
                    $.each(data[0].wards, function(key, data) {

                        address += '<option  value="' + data.name + '"> ' + data.name +
                            ' </option>'
                    })
                    address += '</select>' +
                        '</div>'

                    $('.wards').html(address);
                }
            });
        }

    });
</script>

<script>
    // ------------------------------Địa chỉ chi tiết--------------------------------------------------
    $(document).on('click', '#wards', function() {
        var id = $(this).attr('id')
        if ($(this).val() != '') {
            $('.' + id).css("opacity", 1);
            $('#detail').show();
        }

    });
</script>
@endsection
