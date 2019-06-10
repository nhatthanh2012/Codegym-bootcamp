@extends('master')
@section('title', 'Thêm mới khách hàng')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h2>Thêm mới khách hàng</h2>
    </div>
    <div class="col-md-12">
        <div class="col-12">
            @if (Session::has('success'))
            <p class="text-success">
                <i class="fa fa-check" aria-hidden="true"></i>
                {{ Session::get('success') }}
            </p>
            @endif
            <a href="{{ route('customer.index') }}" class="btn btn-primary">Danh sách</a>
        </div>
        <form method="post" action="{{ route('customer.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Fullname</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label>Ngày sinh</label>
                <input type='date' class="form-control" name="dob" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <select name="id_city" class="form-control">
                    @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <button class="btn btn-secondary" onclick="window.history.back()">Back</button>
        </form>
    </div>
</div>
@endsection