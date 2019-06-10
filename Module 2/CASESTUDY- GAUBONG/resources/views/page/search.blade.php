@extends('master')
@section('content')
<div class="container">
    <div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản phẩm tìm kiếm</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy được {{ count($products) }} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
							@foreach($products as $product)
								<div class="col-sm-3">
									<div class="single-item">															
									<div class="single-item-header">
											@if($product->promotion_price != 0)	
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
											@endif	
											<a href="{{ route('page.productDetail', $product->id) }}"><img src="source/image/product/{{ $product->image}}" height= '250' alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{ $product->name }}</p>
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
						
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
@endsection