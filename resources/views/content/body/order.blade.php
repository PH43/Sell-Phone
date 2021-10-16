<h5> Người nhận: {{ $info['customer_name'] }} </h5>
@php $address = $info['provinces'] . ',' . $info['districts'] .','. $info['wards']  @endphp
<h5> Địa chỉ: {{ $address  }} </h5>
@php $cart = session('cart') @endphp
<h4>Thông tin sản phẩm</h4>
<table class="table">
    <thead>
      <tr>

        <th scope="col">Tên hàng</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Tổng tiền</th>
    
      </tr>
    </thead>
    <tbody>
    
    @foreach ($cart as $product )
    <tr>
        <th scope="row"> {{ $product['name'] }} </th>
        <td>{{ $product['qty'] }}</td>
        <td>({{ $product['price'] * $product['qty']}} )</td>
      </tr>
    @endforeach
    
    </tbody>
  </table>