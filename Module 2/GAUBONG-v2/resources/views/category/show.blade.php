@extends('admin.layouts.master')               
@section('content')
<div class="col-12">
    <div class="container">
		<div class="pull-left">
				<h3 class="inner-title">Admin/Loại sản phẩm</h3>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
                    <li><b><a href="{{ route('showProduct') }}">Danh sách sản phẩm</a></b></li> 
				   <li><b><a href="{{ route('showCategory') }}">Loại sản phẩm</a></b></li> 
				   <li><b><a href="{{ route('showUser') }}">Danh sách User</a></b></li>
				</div>
            </div>
            
			<div class="clearfix"></div>
		</div>
    </div>
        <div class="col-sm-3"></div>             					
                    @if(Session::has('success'))
                        <div class='alert alert-success'>{{ Session::get('success') }}</div>
                    @endif
        <div class="row">                  
            <table class="table table-striped">
                <thead>
                <tr>
                <th scope="col">#</th>
                    <th scope="col">Loại sản phẩm</th>
                    <th scope="col">Description</th>
                    <th scope="col">Hình ảnh</th>                   
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($productType) == 0)
                    <tr>
                        <td colspan="5" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($productType as $key => $type)
                    <tr>
                    <th scope="row">{{ ++$key }}</th>
                        <td>{{ $type->name }}</td>
                        <td>{{ $type->description }}</td>                        
                        <td>
                            <img src="source/image/product/{{ $type->image }}" height='100'weight='100'>
                        </td>                        
                        <td><a href="{{ route('editCategory', $type->id) }}">Edit</a></td>
                        <td><a href="{{ route('deleteCategory', $type->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a></td>
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-primary" href="{{ route('createCategory') }}">Thêm mới</a>
                    </div>
                    <div class="col-6">                        
                    </div>
                    </div>
                </div>
            </div>
        <!-- Modal -->
       
    </div>    
@endsection
