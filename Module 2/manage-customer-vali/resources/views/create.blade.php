@extends('home')
@section('title', 'add new customer')
@section('content')
  <div class="row">
      <div class="col-md-12">
          <h2>ADD NEW CUSTOMER</h2>
      </div>
      @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </div>
      @endif
      <div class="col-md-12">
          <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label >NAME</label>
                  <input type="text" class="form-control" name="name" required>
              </div>
              <div class="form-group">
                  <label >DOB</label>
                  <input type="date" class="form-control" name="dob" required>
              </div>              

              <div class="form-group">
                  <label >EMAIL</label>
                  <input type="text" class="form-control" name="email" required>
              </div>         
              <button type="submit" class="btn btn-primary">ADD NEW CUSTOMER</button>
              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">BACK</button>
          </form>
      </div>
  </div>
@endsection
