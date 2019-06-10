@extends('master')
@section('title', 'Danh sách Tỉnh')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Danh sách tỉnh</h2>
        </div>
        <div class="col-12">
            @if (Session::has('success'))
                <p class="text-danger">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tỉnh</th>                    
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($cities) == 0)
                    <tr>
                        <td colspan='4'> Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($cities as $key => $city)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $city->name }}</td>                                          
                        <td><a href="{{ route('city.edit', $city->id) }}">Edit</a></td>
                        <td><a href="{{ route('city.delete', $city->id) }}" class="text-danger" onclick="return confirm('Bạn có chắc muốn xóa?')">xóa</a></td>
                    </tr>
                    @endforeach
                @endif 
                </tbody>
            </table>
            <div>{{ $cities->links() }}</div>
            <a href="{{ route('city.create') }}" class="btn btn-primary">Thêm mới</a>
        </div>
    </div>
@endsection
