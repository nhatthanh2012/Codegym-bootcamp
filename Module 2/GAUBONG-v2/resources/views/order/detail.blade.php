@extends('admin.layouts.master')
@section('content')
<div class="pull-left">
    <h3 class="inner-title">Admin/Chi tiết đơn hàng</h3>
</div>
<div class="row">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Thành tiền</th>               
            </tr>
        </thead>
        <tbody>
            @if(count($billDetail) == 0)
            <tr>
                <td colspan="5" class="text-center">Không có dữ liệu</td>
            </tr>
            @else
            @foreach($billDetail as $key => $bill)
            <tr>
                <!-- <th scope="row"></th> -->
                <td>{{ ++$key }}</td>
                <td>{{ $bill->product->name }}</td>
                <td>{{ $bill->quantity }}</td>
                <td>{{ $bill->product->unit_price }}</td>
                <td>
                    {{ number_format($bill->quantity * $bill->product->unit_price) }} VND
                </td>                
            </tr>
            @endforeach
            @endif
            <tr>
                <td colspan='4'><b>Tổng tiền</b></td>
                <td><b>{{ number_format($bill_id->total) }} VND</b></td>
            </tr>            
        </tbody>
    </table>
    <button class="btn btn-primary" onclick="window.history.back()"> Back</button>    
</div>
@endsection