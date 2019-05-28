@extends('layout.home')
@section('title', 'Add new post')
@section('content')
  <div class="row">
      <div class="col-md-12">
          <h2>ADD NEW POST</h2>
      </div>      
      <div class="col-md-12">
          <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label >TITLE</label>
                  <input type="text" class="form-control" name="title" required>
              </div>
              <div class="form-group">
                  <label >CONTENT</label>
                  <textarea class="form-control" rows="3" name="content" required></textarea>
              </div>
              <div class="form-group">
                  <label >WRITER</label>
                  <input type="text" class="form-control" name="writer" required>
              </div>
              <div class="form-group">
                  <label >CATEGORY NAME</label>
                    <select name="id_cate" >
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                        @endforeach
                    </select>
              </div>              
              <button type="submit" class="btn btn-primary">ADD NEW POST</button>
              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
          </form>
      </div>
  </div>
@endsection