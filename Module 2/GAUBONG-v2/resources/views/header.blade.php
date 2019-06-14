<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href="{{ route('page.home') }}"><i class="fa fa-home"></i> 28 Nguyễn Tri Phương, TP Huế</a>
                    </li>
                    <li><a href=""><i class="fa fa-phone"></i> 0234.5235.9114</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    @if(Auth::check())
                    <li><a href="#">Chào bạn {{ Auth::user()->name }}</a></li>
                    <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                    <li><a href="{{ route('showProduct') }}">Admin</a></li>
                    @else
                    <li><a href="{{ route('registerUser') }}">Đăng kí</a></li>
                    <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                    <li><a href="{{ route('showProduct') }}">Admin</a></li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="{{route('page.home')}}" id="logo"><img src="source/image/logo.jpg" width="250px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="{{ route('search') }}">
                        <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>
                <div class="beta-comp">
                    <div class="cart">
                        <div class="beta-select"><i class="fa fa-shopping-cart">
                            </i> Giỏ hàng (@if(Session::has('cart')) {{Session('cart')->totalQty }}
                            @else Trống
                            @endif)
                            <i class="fa fa-chevron-down"></i></div>
                        <div class="beta-dropdown cart-body">
                            @if(Session::has('cart'))
                            @foreach($product_cart as $product)
                            <div class="cart-item">
                                <a class="cart-item-delete" href="{{route('deleteItem',$product['item']['id'])}}"><i
                                        class="fa fa-times"></i></a>
                                <div class="media">
                                    <a class="pull-left" href="#"><img
                                            src="source/image/product/{{ $product['item']['image'] }}" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title"><b>{{ $product['item']['name'] }}</b></span>
                                        <span class="cart-item-amount">Số lượng: {{ $product['qty'] }}</span><br>
                                        <span class="cart-item-amount"> Đơn giá:
                                            @if($product['item']['promotion_price'] == 0)
                                            {{ number_format($product['item']['unit_price']) }} VND
                                            @else
                                            {{ number_format($product['item']['promotion_price']) }} VND
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="cart-caption">
                                <div class="cart-total text-right">Tổng tiền:
                                    <span class="cart-total-value">
                                        @if(Session::has('cart')){{number_format($totalPrice)}}
                                        @else 0
                                        @endif VND
                                    </span>
                                </div>
                                <div class="clearfix"></div>
								
								<div class="center">
                                    <div class="space10">&nbsp;</div>
                                    <a href="{{ route('shoppingCart') }}" class="beta-btn primary text-center">Xem giỏ hàng
                                        <i class="fa fa-chevron-right"></i></a>
                                </div>
                                <div class="center">
                                    <div class="space10">&nbsp;</div>
                                    <a href="{{ route('getCheckout') }}" class="beta-btn primary text-center">Đặt hàng
                                        <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div> <!-- .cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #f90;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span>
                <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{ route('page.home')}}">Trang chủ</a></li>
                    <li><a href="#">Loại sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach($productType as $type)
                            <li><a href="{{ route('page.productType', $type->id) }}">{{ $type->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('page.introduction')}}">Giới thiệu</a></li>
                    <li><a href="{{ route('page.contact')}}">Liên hệ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->