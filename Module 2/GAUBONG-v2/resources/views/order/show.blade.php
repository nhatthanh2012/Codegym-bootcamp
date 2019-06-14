@extends('admin.layouts.master')
@section('content')
<div class="pull-left">
    <h3 class="inner-title">Admin/Danh sách đơn hàng</h3>
</div>
<div class="row">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Email</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">SDT</th>
                <th scope="col">Ngày đặt hàng</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Phương thức thanh toán</th>
                <th>Chi tiết đơn hàng</th>
            </tr>
        </thead>
        <tbody>
            @if(count($bills) == 0)
            <tr>
                <td colspan="9" class="text-center">Không có dữ liệu</td>
            </tr>
            @else
            @foreach($bills as $key => $bill)
            <tr>
                <!-- <th scope="row"></th> -->
                <td>{{ ++$key }}</td>
                <td>{{ $bill->customer->name }}</td>
                <td>{{ $bill->customer->email }}</td>
                <td>{{ $bill->customer->address}}</td>
                <td>{{ $bill->customer->phone_number}}</td>
                <td>{{ $bill->date_order}}</td>
                <td>{{ $bill->total}}</td>
                <td>{{ $bill->payment}}</td>
                <td>
                    <a href="{{ route('showDetail', $bill->id) }}">Chi tiết</a>                   
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    
</div>
@endsection