@extends('master')                
@section('content')
<div class="col-12">       
    <div class="container">
		<div class="pull-left">
				<h3 class="inner-title">Admin/User</h3>
			</div>
			<div class="pull-right">
                <ul>
				<div class="beta-breadcrumb">                 
                    <li><b><a href="{{ route('showProduct') }}">Danh sách sản phẩm</a></b></li> 
				   <li><b><a href="{{ route('showCategory') }}">Loại sản phẩm</a></b></li> 
				   <li><b><a href="{{ route('showUser') }}">Danh sách User</a></b></li>
                </div>
                </ul>
            </div>            
			<div class="clearfix"></div>
		</div>
    </div>
        <div class="col-sm-3"></div>             					
                    @if(Session::has('success'))
                        <div class='alert alert-danger'>{{ Session::get('success') }}</div>
                    @endif
        <div class="row">                  
            <table class="table table-striped">
                <thead>
                <tr>
                <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>  
                    <th scope="col">Phone</th>  
                    <th scope="col">Address</th>               
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($users) == 0)
                    <tr>
                        <td colspan="5" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($users as $key => $user)
                    <tr>
                    <th scope="row">{{ ++$key }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>  
                        <td>{{ $user->phone }}</td>  
                        <td>{{ $user->address }}</td>                                                              
                        <td><a href="{{ route('editUser', $user->id) }}">Edit</a></td>
                        <td><a href="{{ route('deleteUser', $user->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a></td>
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <div class="col-12">                
            </div>
        <!-- Modal -->       
    </div>    
@endsection
