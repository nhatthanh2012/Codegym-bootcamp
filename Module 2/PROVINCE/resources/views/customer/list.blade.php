@extends('master')
@section('title', 'Danh sách khách hàng')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h2>Danh sách khách hàng</h2>
    </div>
    <div class="col-12">
        <a class="btn btn-outline-primary" class="navbar-form navbar-left"  href="" data-toggle="modal" data-target="#cityModal">
            Lọc
        </a>
        <br>
        @if(isset($totalCustomerFilter))
        <span class="text-muted">
            {{'Tìm thấy' . ' ' . $totalCustomerFilter . ' '. 'khách hàng:'}}
        </span>
        @endif

        @if(isset($cityFilter))
        <div class="pl-5">
            <span class="text-muted"><i class="fa fa-check" aria-hidden="true"></i>
                {{ 'Thuộc tỉnh' . ' ' . $cityFilter->name }}</span>
        </div>
        @endif
        <div class="col-6">
            <form class="navbar-form navbar-right" action="{{ route('customer.search') }}" method="get">
                @csrf
                <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <input type="text" class="form-control" name="key" placeholder="Search"
                                value="{{ (isset($_GET['key'])) ? $_GET['key'] : '' }}">
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-default">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-12">
        @if (Session::has('success'))
        <p class="text-danger">
            <i class="fa fa-check" aria-hidden="true"></i>
            {{ Session::get('success') }}
        </p>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tỉnh</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if(count($customers) == 0)
                <tr>
                    <td colspan='7'> Không có dữ liệu</td>
                </tr>
                @else
                @foreach($customers as $key => $customer)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->dob }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->city->name }}</td>
                    <td><a href="{{ route('customer.edit', $customer->id) }}">edit</a></td>
                    <td><a href="{{ route('customer.delete', $customer->id) }}" class="text-danger"
                            onclick="return confirm('Bạn có chắc muốn xóa?')">Delete</a></td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        <div class="pagination float-right">{{ $customers->appends(request()->query()) }}</div>
        <a href="{{ route('customer.create') }}" class="btn btn-primary">Thêm mới</a>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cityModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <form action="{{ route('customer.filterByCity') }}" method="get">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!--Lọc theo khóa học -->
                    <div class="select-by-program">
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label border-right">Lọc khách hàng theo tỉnh thành</label>
                            <div class="col-sm-7">
                                <select class="custom-select w-100" name="id_city">
                                    <option value="">Chọn tỉnh thành</option>
                                    @foreach($cities as $city)
                                        @if(isset($cityFilter))
                                            @if($city->id == $cityFilter->id)
                                            <option value="{{$city->id}}" selected>{{ $city->name }}</option>
                                            @else
                                            <option value="{{$city->id}}">{{ $city->name }}</option>
                                            @endif
                                            @else
                                            <option value="{{$city->id}}">{{ $city->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>
                    <!--End-->

                </div>
                <div class="modal-footer">
                    <button type="submit" id="submitAjax" class="btn btn-primary">Chọn</button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Hủy</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection