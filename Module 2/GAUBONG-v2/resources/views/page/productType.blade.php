@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Loại sản phẩm / {{ $productType_id->name }}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{ route('page.home') }}">Trang chủ</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							@foreach($productType as $type)
							<li><a href="{{ route('page.productType', $type->id) }}">{{ $type->name }}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Sản phẩm theo loại</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($productByType)}} sản phẩm {{ $productType_id->name }}</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($productByType as $product)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
										@if($product->promotion_price != 0)	
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif	
											<a href="{{ route('page.productDetail', $product->id) }}"><img src="source/image/product/{{ $product->image }}" height= '250' alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{ $product->name}}</p>
											<p class="single-item-text"> Số lượt xem: {{ $product->view }}</p>
											<p class="single-item-price">
												@if($product->promotion_price == 0)												
													<span class="flash-sale">{{ number_format($product->unit_price) }} VND</span>
												@else
													<span class="flash-del">{{ number_format($product->unit_price) }} VND</span>
													<span class="flash-sale">{{ number_format($product->promotion_price) }} VND</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{ route('addCart', $product->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{ route('page.productDetail', $product->id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy được {{ count($productOthers) }} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($productOthers as $others)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											@if($others->promotion_price != 0)	
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
											@endif	
											<a href="{{ route('page.productDetail', $others->id) }}"><img src="source/image/product/{{ $others->image }}" height='250' alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{ $others->name }}</p>
											<p class="single-item-text"> Số lượt xem: {{ $others->view }}</p>
											<p class="single-item-price">
												@if($others->promotion_price == 0)												
													<span class="flash-sale">{{ number_format($others->unit_price) }} VND</span>
												@else
													<span class="flash-del">{{ number_format($others->unit_price) }} VND</span>
													<span class="flash-sale">{{ number_format($others->promotion_price) }} VND</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{ route('addCart', $others->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{ route('page.productDetail', $others->id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								<div class='row'>{{ $productOthers->links() }}</div>
							</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection