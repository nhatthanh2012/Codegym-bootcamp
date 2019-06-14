@extends('admin.layouts.master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h3 class="inner-title">Admin/Edit loại sản phẩm</h3>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
                    <a href="{{ route('showProduct') }}">Danh sách sản phẩm</a> / <span>Edit loại sản phẩm</span>                    
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>    
	<div class="container">
		<div id="content">			
			<form action="{{ route('updateCategory', $productType->id) }}" method="post" class="beta-form-checkout" enctype="multipart/form-data">
                @csrf
				<div class="row">
                    <div class="col-sm-3"></div>                  
					
                    @if(Session::has('success'))
                        <div class='alert alert-success'>{{ Session::get('success') }}</div>
                    @endif
					<div class="col-sm-6">
						<h4>Chỉnh sửa</h4>
						<div class="space20">&nbsp;</div>
						
						<div class="form-block">
							<label for="your_last_name">Loại sản phẩm</label>
							<input type="text"  name='name' value='{{ $productType->name }}' required>
						</div>                        
						<div class="form-block">
							<label >Description</label>
							<input type="text"  name='description' value='{{ $productType->description }}' required>
						</div>                      
						<div class="form-block">
							<label for="adress">Hình ảnh</label>
							<input type="file" id="adress" name='image' value='{{ $productType->image }}'>
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