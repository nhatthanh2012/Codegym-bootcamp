@extends('admin.layouts.master')
@section('content')
<div class="inner-header">	  
		<div class="container">
			<div class="pull-left">
				<h3 class="inner-title">Admin/Thêm mới Banner</h3>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>    
	<div class="container">
		<div id="content">			
			<form action="{{ route('storeSlide') }}" method="post" class="beta-form-checkout" enctype="multipart/form-data">
                @csrf
				<div class="row">
                   
					<div class="col-sm-6">
						<h4>Thêm mới Banner</h4>
                            <div class="col-sm-3">             					
                                @if(Session::has('success'))
                                    <div class='alert alert-success'>{{ Session::get('success') }}</div>
                                @endif
                            </div> 						
						<div class="form-block">
							<label for="adress">Hình ảnh</label>
							<input type="file" id="adress" name='image' class="form-control" required>
						</div>	    
						<div class="space10">&nbsp;</div>			
						<div class="form-block">
                            <button type="submit" class="btn btn-primary" class="form-control">Thêm mới banner</button>
                            <button class="btn btn-primary" onclick="window.history.go(-1); return false;">Hủy</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
            </form>           
		</div> <!-- #content -->
    </div> <!-- .container -->
@endsection