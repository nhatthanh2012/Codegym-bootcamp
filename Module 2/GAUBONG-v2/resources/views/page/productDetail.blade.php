@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Loại sản phẩm / {{ $product->productType->name }}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{ route('page.home') }}">Trang chủ</a> / <span>Thông tin chi tiết sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-4">
                        @if($product->promotion_price != 0)
                        <div class="ribbon-wrapper">
                            <div class="ribbon sale">Sale</div>
                        </div>
                        @endif
                        <img src="source/image/product/{{ $product->image }}" height='350' weight='300' alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <p class="single-item-title">
                                <h4>{{ $product->name }}</h4>
                            </p>
                            <p class="single-item-price">
                                @if($product->promotion_price == 0)
                                <span class="flash-sale">{{ number_format($product->unit_price) }} VND</span>
                                @else
                                <span class="flash-del">{{ number_format($product->unit_price) }} VND</span>
                                <span class="flash-sale">{{ number_format($product->promotion_price) }} VND</span>
                                @endif
                            </p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-desc">
                            <p></p>
                        </div>
                        <div class="space20">&nbsp;</div>

                        <p>Số lượng</p>
                        <div class="single-item-form">
                            <form action="{{ route('addCart', $product->id) }}" method='get' class="form-group">
                                <input class="form-block" type="number" name="num-product" value="1">
                                <button><i class="fa fa-shopping-cart"></i>Mua ngay</button>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                        <div class="space20">&nbsp;</div>
                        <div>
                            <button class="btn btn-primary" onclick="window.history.go(-1); return false;">Trở
                                về</button>
                        </div>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div id="wrap-inner">                    
                    <div id="product-detail">
                        <h6>Mô tả</h6>
                        <p class="text-justify">
                            {{ $product->productType->description }}
                        </p>
                    </div>
                    <div id="comment">
                        <h6>Bình luận</h6>
                        <div class="col-md-9 comment">
                            <form method="post" action="{{ route('postComment', $product->id) }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input required type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="name">Tên:</label>
                                    <input required type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="cm">Bình luận:</label>
                                    <textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-default">Gửi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="comment-list">
                        @foreach($comments as $comment)
                        <ul>
                            <li class="com-title">
                               <b>{{ $comment['name'] }}</b> 
                                <br>
                                <span>{{ $comment['email'] }}</span>
                                <br>
                                <span>{{ date('d/m/Y H:i', strtotime($comment['create_at'])) }}</span>
                            </li>
                            <li class="com-details">
                                {{ $comment['content'] }}
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="space50">&nbsp;</div><br>

                <div class="beta-products-list">
                    <h4>Sản phẩm liên quan</h4>
                    <div class="row">
                        @foreach($product_related as $related)
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="single-item-header">
                                    @if($related->promotion_price != 0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @endif
                                    <a href="{{route('page.productDetail', $related->id)}}"><img
                                            src="source/image/product/{{$related->image}}" height='250' alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$related->name}}</p>
                                    <p class="single-item-text"> Số lượt xem: {{ $related->view }}</p>
                                    <p class="single-item-price">
                                        @if($related->promotion_price == 0)
                                        <span class="flash-sale">{{ number_format($related->unit_price) }} VND</span>
                                        @else
                                        <span class="flash-del">{{ number_format($related->unit_price) }} VND</span>
                                        <span class="flash-sale">{{ number_format($related->promotion_price) }}
                                            VND</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="{{ route('addCart', $related->id)}}"><i
                                            class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="{{route('page.productDetail', $related->id)}}">Chi
                                        tiết <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div> <!-- .beta-products-list -->
            </div>
            <div class="col-sm-3 aside">
                <div class="widget">
                    <h3 class="widget-title">Sản phẩm mới</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            @foreach($new_product as $new)
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="{{ route('page.productDetail', $new->id) }}"><img
                                        src="source/image/product/{{$new->image}}" alt=""></a>
                                <div class="media-body">
                                    {{$new->name}}
                                    <br><span class="beta-sales-price" style='font-size:12px'
                                        ;>{{ number_format($new->unit_price) }} VND</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection