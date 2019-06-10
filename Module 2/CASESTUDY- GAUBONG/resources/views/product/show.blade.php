@extends('master')
@section('content')
<div class="col-12" class='main'>
    <div class="container">
        <div class="pull-left">
            <h3 class="inner-title">Admin/Danh sách sản phẩm</h3>
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
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Thể loại</th>
                <th scope="col">Giá gốc</th>
                <th scope="col">giá khuyến mãi</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">New</th>
                <th scope="col">View</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @if(count($products) == 0)
            <tr>
                <td colspan="7" class="text-center">Không có dữ liệu</td>
            </tr>
            @else
            @foreach($products as $key => $product)
            <tr>
                <!-- <th scope="row"></th> -->
                <td>{{ ++$key }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->productType->name }}</td>
                <td>{{ $product->unit_price }}</td>
                <td>{{ $product->promotion_price }}</td>
                <td>
                    <img src="source/image/product/{{ $product->image }}" height='100' weight='100' alt="">
                </td>
                <td>{{ $product->new }}</td>
                <td>{{ $product->view }}</td>
                <td><a href="{{ route('editProduct', $product->id) }}">Edit</a>
                    <a href="{{ route('deleteProduct', $product->id) }}" class="text-danger"
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
                <a class="btn btn-primary" href="{{ route('createProduct') }}">Thêm mới</a>
                <a class="btn btn-primary" href="{{ route('showCategory') }}">loại sản phẩm</a>
            </div>
            <div class="col-6">
                <div class="pagination float-right">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
</div>
@endsection