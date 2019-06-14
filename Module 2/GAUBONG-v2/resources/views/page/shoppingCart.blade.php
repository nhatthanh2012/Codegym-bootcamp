@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Thông tin giỏ hàng</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Giỏ hàng</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">

        <div class="table-responsive">
            <!-- Shop Products Table -->
            <table class="shop_table beta-shopping-cart-table" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-name">Sản phẩm</th>
                        <th class="product-image">Hình ảnh</th>
                        <th class="product-quantity">Số lượng</th>
                        <th class="product-price">Đơn giá</th>
                        <th class="product-subtotal">Thành tiền</th>
                        <th class="product-remove">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @if(Session::has('cart'))
                    @foreach($product_cart as $product)
                    <tr class="cart_item">
                        <td class="product-name">
                            <div class="media">
                                <div class="media-body">
                                    <p class="font-large table-title">{{ $product['item']['name'] }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="product-image">
                            <div class="media">
                                <img class="pull-left" src="source/image/product/{{ $product['item']['image'] }}" alt=""
                                    height='100px' width="100px">
                            </div>
                        </td>
                        <td>
                            <div class="product-quantity">
                                <input class="form-control" type="number" value="{{ $product['qty'] }}">
                            </div>
                        </td>

                        <td class="product-price">
                            <span class="amount">
                                @if($product['item']['promotion_price'] == 0)
                                {{ number_format($product['item']['unit_price']) }} VND
                                @else
                                {{ number_format($product['item']['promotion_price']) }} VND
                                @endif
                            </span>
                        </td>

                        <td class="product-subtotal">
                            <span class="amount">
                                @if($product['item']['promotion_price'] == 0)
                                {{ number_format($product['qty'] * $product['item']['unit_price']) }} VND
                                @else
                                {{ number_format($product['qty'] * $product['item']['promotion_price']) }} VND
                                @endif
                            </span>
                        </td>
                        <td class="product-remove">
                            <a href="{{route('deleteItem',$product['item']['id'] )}}" class="remove"
                                title="Remove this item"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6" class="actions">
                            <button type="submit" class="beta-btn primary" name="update_cart">Cập nhật giỏ hàng <i
                                    class="fa fa-chevron-right"></i></button>
                            <a href="{{ route('getCheckout') }}" class="beta-btn primary text-center">Đặt hàng <i
                                    class="fa fa-chevron-right"></i></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
            @endif
            <!-- End of Shop Table Products -->
        </div>
        <!-- Cart Collaterals -->
        <div class="cart-collaterals">

            <form class="shipping_calculator pull-left" action="#" method="post">

                <section class="shipping-calculator-form " style="display: none;">

                    <p class="form-row form-row-wide">
                        <input type="hidden" name="calc_shipping_state" id="calc_shipping_state"
                            placeholder="State / county">
                    </p>
                    <p class="form-row form-row-wide">
                        <input type="text" class="input-text" value="" placeholder="Postcode / Zip"
                            name="calc_shipping_postcode" id="calc_shipping_postcode">
                    </p>
                    <p><button type="submit" name="calc_shipping" value="1" class="beta-btn primary pull-right">Update
                            Totals</button></p>
                </section>
            </form>

            <div class="cart-totals pull-right">
                <div class="cart-totals-row">
                    <h5 class="cart-total-title">Tổng tiền</h5>
                </div>

                <div class="cart-totals-row"><span></span>
                    <span>
                        @if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif VND
                    </span>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
        <!-- End of Cart Collaterals -->
        <div class="clearfix"></div>

    </div> <!-- #content -->
</div> <!-- .container -->
@endsection