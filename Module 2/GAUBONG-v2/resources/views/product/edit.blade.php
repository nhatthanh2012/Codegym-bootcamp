@extends('admin.layouts.master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h3 class="inner-title">Admin/Edit sản phẩm</h3>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
                    <a href="{{ route('showProduct') }}">Danh sách sản phẩm</a> / <span>Edit sản phẩm</span>                    
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>    
	<div class="container">
		<div id="content">			
			<form action="{{ route('updateProduct', $product->id) }}" method="post" class="beta-form-checkout" enctype="multipart/form-data">
                @csrf
				<div class="row">
                    
					<div class="col-sm-6">
						<h4>Chỉnh sửa</h4>
						<div class="space20">&nbsp;</div>
						<div class="col-sm-3">             					
							@if(Session::has('success'))
								<div class='alert alert-success'>{{ Session::get('success') }}</div>
							@endif
						</div>
						<div class="form-block">
							<label for="your_last_name">Tên sản phẩm</label>
							<input type="text" class="form-control" name='name' value='{{$product->name}}' required>
						</div>

                        <div class="form-block">
                            <label for="exampleFormControlSelect1">Thể loại</label>
                            <select class="form-control" name="id_type">
                                @foreach($productType as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
						<div class="form-block">
							<label >Giá gốc</label>
							<input type="text"  name='unit_price' class="form-control" value='{{ $product->unit_price }}' required>
						</div>
                        <div class="form-block">
							<label >Giá khuyến mãi</label>
							<input type="text"  name='promotion_price' class="form-control" value='{{$product->promotion_price}}' required>
						</div>
						<div class="form-block">
							<label for="adress">Hình ảnh</label>
							<img src="source/image/product/{{ $product->image }}" height='100' weight='100' alt="">
							<input type="file" id="adress" class="form-control" name='image'>
						</div>

						<div class="form-block">
							<label for="phone">New</label>
							<input type="text"  name='new'class="form-control" value='{{ $product->new }}' required>
						</div>					
						<div class="form-block">
                            <button type="submit" class="btn btn-primary">Edit sản phẩm</button>
                            <button class="btn btn-primary" onclick="window.history.go(-1); return false;">BACK</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
            </form>           
		</div> <!-- #content -->
    </div> <!-- .container -->
@endsection