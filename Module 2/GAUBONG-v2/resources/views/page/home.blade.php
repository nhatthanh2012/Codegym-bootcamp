@extends('master')
@section('content')
<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
								@foreach($slide as $sl)
									<!-- THE FIRST SLIDE -->
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined"
										data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" 
										data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" 
										data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" 
										data-oheight="undefined">
										<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" 
										data-lazydone="undefined" src="source/image/slide/{{ $sl->image }}" data-src="source/image/slide/{{ $sl->image }}" 
										style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{ $sl->image }}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
										</div>
									</div>
						        </li>
								@endforeach
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
	<div class="container">
    <div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản phẩm mới</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy được {{ count($new_product) }} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
							@foreach($new_product as $new)
								<div class="col-sm-3">
									<div class="single-item">															
									<div class="single-item-header">
											@if($new->new == 1)	
											<div class="ribbon-wrapper"><div class="ribbon sale">New</div></div>
											@endif	
											<a href="{{ route('page.productDetail', $new->id) }}"><img src="source/image/product/{{ $new->image}}" height= '250' alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{ $new->name }}</p>
											<p class="single-item-text"> Số lượt xem: {{ $new->view }}</p>
											<p class="single-item-price">
												@if($new->promotion_price == 0)												
													<span class="flash-sale">{{ number_format($new->unit_price) }} VND</span>
												@else
													<span class="flash-del">{{ number_format($new->unit_price) }} VND</span>
													<span class="flash-sale">{{ number_format($new->promotion_price) }} VND</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{ route('addCart', $new->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{ route('page.productDetail', $new->id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>								
							@endforeach
							</div>
							<div class='row'>{{ $new_product->links() }}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm khuyến mãi</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy được {{ count($promotion_product) }} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($promotion_product as $promotion)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
											<a href="{{ route('page.productDetail', $promotion->id) }}"><img src="source/image/product/{{$promotion->image}}" height=250 alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$promotion->name}}</p>
											<p class="single-item-text"> Số lượt xem: {{ $promotion->view }}</p>
											<p class="single-item-price">
												<span class="flash-del">{{ number_format($promotion->unit_price) }} VND</span>
												<span class="flash-sale">{{ number_format($promotion->promotion_price) }} VND</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{ route('addCart', $promotion->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{ route('page.productDetail', $promotion->id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div>{{ $promotion_product->links() }}</div>
							<div class="space40">&nbsp;</div>							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
@endsection