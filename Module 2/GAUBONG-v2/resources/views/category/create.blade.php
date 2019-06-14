@extends('admin.layouts.master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h3 class="inner-title">Admin/Thêm mới sản phẩm</h3>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
                    <a href="{{ route('showProduct') }}">Danh sách sản phẩm</a> / <span>Thêm mới sản phẩm</span>                    
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>    
	<div class="container">
		<div id="content">			
			<form action="{{ route('postCategory') }}" method="post" class="beta-form-checkout" enctype="multipart/form-data">
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
							<label >Loại sản phẩm</label>
							<input type="text"  name='name' class="form-control" required>
						</div>                        
						<div class="form-block">
							<label >Description</label>
							<input type="text" class="form-control" name='description' >
						</div>                      
						<div class="form-block">
							<label >Hình ảnh</label>
							<input type="file" class="form-control" name='image'>
						</div>	
						<div class="space10">&nbsp;</div>									
						<div class="form-block">
                            <button type="submit" class="btn btn-primary">Thêm loại sản phẩm</button>
                            <button class="btn btn-primary" onclick="window.history.go(-1); return false;">BACK</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
            </form>           
		</div> <!-- #content -->
    </div> <!-- .container -->
@endsection