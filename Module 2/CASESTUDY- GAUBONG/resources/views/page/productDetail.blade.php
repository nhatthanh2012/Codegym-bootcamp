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
								<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
							@endif
							<img src="source/image/product/{{ $product->image }}" height='350'weight='300' alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h4>{{ $product->name }}</h4></p>
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

							<p>Options:</p>
							<div class="single-item-options">								
								<select class="wc-select" name="color">
									<option>Qty</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="{{ route('addCart', $product->id)}}"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
							<div class="space20">&nbsp;</div>
								<div>
									<button class="btn btn-primary" onclick="window.history.go(-1); return false;">Trở về</button>
								</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả</a></li>
							<li><a href="#tab-reviews">Reviews (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{{ $product->productType->description }}</p>							
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					
					<div class="beta-products-list">
						<h4>Sản phẩm liên quan</h4>						
						<div class="row">
							@foreach($product_related as $related)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
									@if($related->promotion_price != 0)	
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
										<a href="{{route('page.productDetail', $related->id)}}"><img src="source/image/product/{{$related->image}}" height='250' alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$related->name}}</p>
										<p class="single-item-text"> Số lượt xem: {{ $related->view }}</p>
										<p class="single-item-price">										
											@if($related->promotion_price == 0)												
											<span class="flash-sale">{{ number_format($related->unit_price) }} VND</span>
											@else
												<span class="flash-del">{{ number_format($related->unit_price) }} VND</span>
												<span class="flash-sale">{{ number_format($related->promotion_price) }} VND</span>
											@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="{{ route('addCart', $related->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('page.productDetail', $related->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
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
									<a class="pull-left" href="{{ route('page.productDetail', $new->id) }}"><img src="source/image/product/{{$new->image}}" alt=""></a>
									<div class="media-body">
										{{$new->name}}
										<br><span class="beta-sales-price" style='font-size:12px';>{{ number_format($new->unit_price) }} VND</span>
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