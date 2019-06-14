@extends('admin.layouts.master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h3 class="inner-title">Admin/Edit thông tin User</h3>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
                    <a href="{{ route('showProduct') }}">Danh sách sản phẩm</a> / <span>Edit thông tin User </span>                    
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>    
	<div class="container">
		<div id="content">			
			<form action="{{ route('updateUser', $user->id) }}" method="post" class="beta-form-checkout" enctype="multipart/form-data">
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
							<label for="your_last_name">Fullname</label>
							<input type="text"  name='name' value='{{ $user->name }}' required>
						</div>                        
						<div class="form-block">
							<label for="your_last_name">Email</label>
							<input type="text"  name='email' value='{{ $user->email }}' required>
                        </div> 
                        <div class="form-block">
							<label for="your_last_name">Password</label>
							<input type="text"  name='password' value='{{ $user->password }}' required>
                        </div> 
                        <div class="form-block">
							<label for="your_last_name">Phone</label>
							<input type="text"  name='phone' value='{{ $user->phone}}' required>
                        </div> 		
                        <div class="form-block">
							<label for="your_last_name">Address</label>
							<input type="text"  name='address' value='{{ $user->address }}' required>
						</div> 							
						<div class="form-block">
                            <button type="submit" class="btn btn-primary">Edit thông tin User</button>
                            <button class="btn btn-primary" onclick="window.history.go(-1); return false;">BACK</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
            </form>           
		</div> <!-- #content -->
    </div> <!-- .container -->
@endsection