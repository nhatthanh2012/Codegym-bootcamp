@extends('admin.layouts.master')
@section('content')
<div class="inner-header">	  
		<div class="container">
			<div class="pull-left">
				<h3 class="inner-title">Admin/Thêm mới sản phẩm</h3>
			</div>			
			<div class="clearfix"></div>
		</div>
	</div>    
	<div class="container">
		<div id="content">			
			<form action="{{ route('postProduct') }}" method="post" class="beta-form-checkout" enctype="multipart/form-data">
                @csrf
				<div class="row">
                    <div class="col-sm-3"></div>                  
					
                    @if(Session::has('success'))
                        <div class='alert alert-success'>{{ Session::get('success') }}</div>
                    @endif
					<div class="col-sm-6">
						<h4>Thêm mới</h4>
						<div class="space20">&nbsp;</div>						
						<div class="form-block">
							<label for="your_last_name">Tên sản phẩm</label>
							<input type="text"  name='name' class="form-control" required>
						</div>                        
						<div class="form-block">
							<label >Giá gốc</label>
							<input type="text"  name='unit_price' class="form-control" required>
						</div>
                        <div class="form-block">
							<label >Giá khuyến mãi</label>
							<input type="text"  name='promotion_price' class="form-control" required>
						</div>			
						<div class="form-block">
							<label for="phone">New</label>
							<input type="text"  name='new' class="form-control" required>
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
							<label for="adress">Hình ảnh</label>							
							<input type="file" id="adress" name='image' class="form-control" required>
						</div>	
						<div class="space10">&nbsp;</div>			
						<div class="form-block">
                            <button type="submit" class="btn btn-primary">Thêm mới sản phẩm</button>
                            <button class="btn btn-primary" onclick="window.history.go(-1); return false;">Hủy</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
            </form>           
		</div> <!-- #content -->
    </div> <!-- .container -->
@endsection