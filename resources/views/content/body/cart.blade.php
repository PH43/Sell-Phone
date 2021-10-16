@extends('content/template/template')
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
            overflow-Y:scroll;
            height: 520px;
            text-align: center;
            margin-top: 2%;
            margin-left: 32%;
            display: none;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

        }
        .order-product::-webkit-scrollbar{
            width: 2px;
    background-color: #F5F5F5;
        }
        .enter-info label {
            text-shadow: 5px 5px 10px white;
            color: greenyellow;
            ;
            display: block;
            text-align: left;

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
        }
        .input select {
            border: 2px solid black;
            height: 45px;
        }
        .input input {

            border: 2px solid black;
            height: 45px;

        
            width: 90%;

        }
   




        label.error {
            display: block;
            color: red;
            margin-left: 5%;
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
                        @foreach ($cart['cart'] as $cart)
                            @php
                                $total += $cart['qty'] * $cart['price'];
                            @endphp

                            <tr class="cart-{{ $cart['id'] }}">
                                <th scope="row"><img style="width: 100px;height: 100px"
                                        src=" {{ asset('images/productImages/' . $cart['image']) }}" alt=""> </th>
                                <td>{{ $cart['name'] }}</td>
                                <td><input class="qty" data-cartid="{{ $cart['id'] }}"
                                        data-price="{{ $cart['price'] }}" style="width: 40px" type="number"
                                        value="{{ $cart['qty'] }}" id="qty-{{$cart['id']}}" min="1" max="10"></td>
                                <td> ${{ number_format($cart['price'],0,',') }}</td>
                                <td class="total-price-{{ $cart['id'] }}">
                                    <span>${{number_format($cart['qty'] * $cart['price'],0,',') }} </span>
                                </td>
                                <td><a href="" onclick="deleteCart({{ $cart['id'] }})">Delete</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
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
                                <h5>{{ number_format ($total,0,',') }}$</h5>
                            </div></span>
                        <span>Giao hàng & thuế được tính khi thanh toán</span>
                    </div>

                    <div class="payment-cart">
                        <a href="" class="order-products">Đặt hàng</a>
                    </div>
                </div>
            </div>
        @else
            <span style="margin-left: 2%;">Không có sản phẩm trong giỏ hàng của bạn</span>
        @endif
        <div class="message" style="display: none;">
            <span style="margin-left: 2%;"> Kiểm tra email để xem giỏ hàng của bạn </span>
        </div>
    </div>




   <div class="fixed-top form-order" >
    <div class="order-product">
        <div class="enter-info  ">
            <a href="javascript:0"
                style="float:right;font-size: 20px;;color: black;margin-right: 10px;transform: translateY(-20px)"
                id="close-form-order"><i class="fas fa-times"></i></a>
            <h5>ORDERS PRODUCT</h5>

            <span style="line-height: 40px;">Để đặt hàng, vui lòng thêm địa chỉ nhận hàng</span>
            <form method="post" action="{{ route('order') }}" id="order-form" style="text-align: center;">
             @csrf

                <div id="toggle">

                    <div class="input">
                        
                        <input type="text" name="customer_name" id="name" placeholder="Vui lòng nhập họ"
                        value="@if(isset(Auth::user()->id)) {{ Auth::user()->name }}  @endif"
                        >
 
                    </div>

                    <div class="input">
                        <select style="width: 90%;margin-left: 5%;"  id="districts" class="form-select"
                            aria-label="Default select example" name="provinces" placeholder="Address">
                            <option value="" selected>Thành Phố</option>
                            @foreach ($province as $province)
                                <option  value="{{  $province['name'] }}">
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
                    <div class="input">
                        <input type="text" name="email" id="email" placeholder="Email" value="@if(isset(Auth::user()->id)) {{ Auth::user()->email }}  @endif" >
                    </div>
                    <div class="input">
                        <input type="text" name="numberphone" id="numberphone" placeholder="Number Phone">
                    </div>
                    <div class="input">
                        <input type="text" name="message" id="message" placeholder="Message">
                    </div>
                </div>
                <input style="margin-top: 20px" type="submit" class="requestorder btn btn-primary" value="hoàn thành"  class="btn btn-danger">
            </form>
        </div>
    </div>
   </div>




    
    <script>
    
        $(document).ready(function() {
            $("#order-form").validate({
                rules: {
                    customer_name: {
                        required: true,
                        minlength:6,
                        maxlength:24,
                    },
                    numberphone: {
                        required: true,
                        minlength:9,
                        maxlength:12,
                        number:true,
                    },
                    email: {
                        required: true,
                       // email:true,
                    },
                    address: {
                        required: true,
                    },
                    provinces:{
                        required: true,
                    },
                    districts:{
                        required: true,
                    },
                    wards:{
                        required: true,
                    }

                },

            });
        });
    </script>
    <script>
        $(document).on('click','.requestorder', function(e){
            e.preventDefault();
            if(  $("#order-form").valid()){
                var name =  $("#name").val();
        var province = $("#districts").val();
        var district = $("#wards").val();
        var wards = $("#address-details").val();
        var addressDetails = $(".addressDetails").val();
        var numberphone = $("#numberphone").val();
        var message = $("#message").val();
        var email = $("#email").val();
            $.ajax({
                type: "POST",
                url: "{{ route('order') }}",
                data:{
                    customer_name:name,
                provinces:province,
                districts:district,
                wards:wards,
                numberphone:numberphone,
                addressDetails:addressDetails,
                message:message,
                email:email,
                _token:$('input[name=_token]').val()
                },
                success: function(data) {
                    console.log(data);
                 if(data == 1){
                     alert('Mua hành thành công');
                     $('.show-cart').remove();
                     $('.payment').remove();
                     $('.message').show();
                     $('.order-product').hide(500);
                  //   document.getElementById('order-form').reset();
                 }else{
                     alert(data);
                 }
                }
            });
            }
          
     


        });
    </script>

    <script>
        $(document).on('click', '#districts', function() {
            var name = $(this).val();
            if (name != '') {
                $.ajax({
                    type: "get",
                    url: "http://localhost/sell-phone/public/cart/address/dictrict/"+name,
                    success: function(data) {
                        var address ='';
                      
                    address +=    '<div class="input">' +
                        '<select style="width: 90%;margin-left: 5%;" name="districts" id="wards" class="form-select"' +
                            'aria-label="Default select example" name="dictricts" placeholder="Address">' +
                            '<option value="" selected>Quận,Huyện</option>'  
                        $.each(data[0].districts , function(key, data){
                         
                      address +=  '<option  value="'+data.name+'"> ' + data.name + ' </option>' 
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
    $(document).on('click', '#wards', function() {
        var name = $(this).val();
        if (name != '') {
            $.ajax({
                type: "get",
                url: "http://localhost/sell-phone/public/cart/address/ward/" + name,
                success: function(data) {
                    var address ='';
        
                address +=    '<div class="input">' +
                    '<select style="width: 90%;margin-left: 5%;" name="wards" id="address-details" class="form-select"' +
                        'aria-label="Default select example" name="dictricts" placeholder="Address">' +
                        '<option value="" selected>Phường,Xã</option>'  
                    $.each(data[0].wards , function(key, data){
                      
                  address +=  '<option  value="'+data.name+'"> ' + data.name + ' </option>' 
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
    $(document).on('click','#address-details', function(){
        if($(this).val() != ''){
            var address = '';
            address += '<div class="input">' +
                '<input  type="text" name="addressDetails" class="addressDetails" placeholder="address-details"> </div>'
            $('.address-details').html(address);
        }
           
   });
</script>

    <script>
        $(document).on('click', '.order-products', function(e) {
            e.preventDefault();
            $('.order-product').show(500);
        });
        $('#close-form-order').click(function() {
            $('.order-product').hide(500);
        });
    </script>
    <script>
        function deleteCart(id) {
            event.preventDefault();
            $.ajax({
                type: "get",
                url: "http://localhost/sell-phone/public/cart/delete/" + id,
                success: function(data) {
                    console.log(data);
                    $("#cart-" +id).remove();
                    $('.cart-' + id).remove();
                    var totalPrice = 0;

                    $.each(data.cart, function(key, data) {
                    totalPrice += (data.qty * data.price);
                    });

                    var html = '';
                    console.log(totalPrice);
                    html += '<h5> $' + formatNumber(totalPrice)  + ' </h5>'
                    $('.total').html(html);



                    if (data.cart.length <= 0) {
                        $('.show-cart').remove();
                        $('.payment').remove();

                        var message = '';
                        message += 'Không có sản phẩm trong giỏ hàng của bạn'
                        $('.message').html(message);
                    }
                }
            })
        }
    </script>


    <script>
        $(document).on('change', '.qty', function(e) {
            var qty = $(this).val();
            var cartId = $(this).data("cartid");
            var price = $(this).data("price");
            if (qty > 10) {
                alert("You can only buy less than 10 products");
                $("#qty-"+cartId).val(10);
             
                requestCart(cartId,10,price);


            } else if (qty < 1) {
                deleteCart(cartId);
            } else {
              
                requestCart(cartId,qty,price);
            }
        });
    </script>


<script>
    function requestCart(cartId,qty,price) {
        $.ajax({
                    type: "get",
                    url: "http://localhost/sell-phone/public/cart/" + cartId + "/update/" + qty,
                    success: function(data) {

                        var total = '';
                        total += '<span> $' + formatNumber(qty * price) + '</span> '
                        $('.total-price-' + cartId).html(total);

                        var totalPrice = 0;
                        $.each(data.cart, function(key, data) {
                            totalPrice += (data.qty * data.price);
                        });

                        var html = '';
                
                        html += '<h5> $' + formatNumber(totalPrice)  + ' </h5>'
                        $('.total').html(html);
                    }
                })
    }
</script>
@endsection
