<div id="wrap-inner">
    <div id="khach-hang">
        <h3>Thông tin khách hàng</h3>
        <p>
            <span class="info">Khách hàng: </span>
            {{ $info['name'] }}
        </p>
        <p>
            <span class="info">Email: </span>
            {{ $info['email'] }}
        </p>
        <p>
            <span class="info">Điện thoại: </span>
            {{ $info['phone'] }}
        </p>
        <p>
            <span class="info">Địa chỉ: </span>
            {{ $info['address'] }}
        </p>
        <p>
            <span class="info">Phương thức thanh toán: </span>
            {{ $info['payment'] }}
        </p>
    </div>
    <div id="hoa-don">
        <h3>Hóa đơn mua hàng</h3>
        <table class="table-bordered table-responsive" border='1'>
            <tr class="bold">
                <td width="30%">Tên sản phẩm</td>
                <td width="25%">Số lượng</td>
                <td width="20%">Đơn giá</td>
                <td width="15%">Thành tiền</td>
            </tr>
            @if(Session::has('cart'))
            @foreach($product_cart as $product)
            <tr>
                <td>{{ $product['item']['name'] }}</td>
                <td>{{ $product['qty'] }}</td>
                <td class="price">
                    @if($product['item']['promotion_price'] == 0)
                    {{ number_format($product['item']['unit_price']) }} VND
                    @else
                    {{ number_format($product['item']['promotion_price']) }} VND
                    @endif
                </td>
                <td class="amount">
                    @if($product['item']['promotion_price'] == 0)
                    {{ number_format($product['qty'] * $product['item']['unit_price']) }} VND
                    @else
                    {{ number_format($product['qty'] * $product['item']['promotion_price']) }} VND
                    @endif
                </td>
            </tr>
            @endforeach
            <tr class="bold">
                <td width="30%" colspan="3">Tổng tiền</td>                
                <td width="30%"> {{number_format($totalPrice) }}  VND</td>
            </tr>            
            @endif
        </table>
    </div>
    <div id="xac-nhan">
        <br>
        <p align="justify">
            <b>Quý khách đã đặt hàng thành công!</b><br />
            • Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau
            thời gian 2 đến 3 ngày, tính từ thời điểm này.<br />
            • Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.<br />
            <b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</b>
        </p>
    </div>
</div>