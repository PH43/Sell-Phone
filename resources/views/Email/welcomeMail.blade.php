@include('content/template/link')
@component('mail::message')
@php $products = Session('cart')  @endphp
<h1>Thông tin khách hàng</h1>
 <h5>Họ và tên : {{ $mailInfo['name'] }}</h5>
 <h5>Số điện thoại : {{ $mailInfo['phone'] }}</h5>
 <h5>Email : {{ $mailInfo['email'] }}</h5>
 <h5>Địa chỉ : {{ $mailInfo['address'] }}</h5>
<h1>Thông tin mua hàng</h1>

        @foreach ($products as $product )
      
           
    Tên sản phẩm: {{ $product['name'] }}
    Giá: ${{ $product['price'] }}
    Số lượng: {{ $product['qty'] }}
          
        @endforeach
   

Congratulations! Your account has been created.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
