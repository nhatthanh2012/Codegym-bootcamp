@extends('admin.layouts.master')
@section('content')
<div class="col-12" class='main'>
    <div class="container">
        <div class="pull-left">
            <h3 class="inner-title">Admin/Slide ảnh</h3>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <li><b><a href="{{ route('showProduct') }}">Danh sách sản phẩm</a></b></li>
                <li><b><a href="{{ route('showCategory') }}">Loại sản phẩm</a></b></li>
                <li><b><a href="{{ route('showUser') }}">Danh sách User</a></b></li>
                <li><b><a href="{{ route('showSlide') }}">Danh sách Slide ảnh</a></b></li>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="col-sm-3">
    @if(Session::has('success'))
        <div class='alert alert-danger'>{{ Session::get('success') }}</div>
    @endif
</div>
<div class="row">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>               
                <th></th>
            </tr>
        </thead>
        <tbody>
            @if(count($slide) == 0)
            <tr>
                <td colspan="3" class="text-center">Không có dữ liệu</td>
            </tr>
            @else
                @foreach($slide as $key => $sl)
                <tr>                   
                    <td>{{ ++$key }}</td>                              
                    <td>
                        <img src="source/image/slide/{{ $sl->image }}" height='100' weight='100'>
                    </td>                
                    <td><a href="{{ route('editSlide', $sl->id) }}">Edit</a>
                        <a href="{{ route('deleteSlide', $sl->id) }}" class="text-danger"
                            onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="col-12">
        <div class="row">
            <div class="col-6">
                <a class="btn btn-primary" href="{{ route('createSlide') }}">Thêm Banner mới</a>                
            </div>
            <div class="col-6">               
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
</div>
@endsection