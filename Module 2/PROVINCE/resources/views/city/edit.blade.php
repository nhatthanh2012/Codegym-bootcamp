@extends('master')
@section('title', 'Chỉnh sửa')
@section('content')
  <div class="row">
      <div class="col-md-12">
          <h2>Chỉnh sửa</h2>
      </div>
      <div class="col-md-12">
      <div class="col-12">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif
        </div>
          <form method="post" action="{{ route('city.update', $city->id) }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label >Tên tỉnh</label>
                  <input type="text" class="form-control" value="{{ $city->name }}" name="name" required>
              </div>              
              <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
          </form>
      </div>
  </div>
@endsection