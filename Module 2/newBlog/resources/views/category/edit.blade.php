@extends('layout.home')

@section('title', 'Edit category')

@section('content')
  <div class="row">
      <div class="col-md-12">
          <h2>Edit category</h2>
      </div>
      <div class="col-md-12">
          <form method="post" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label >Category Name</label>
                  <input type="text" class="form-control" name="namecategory" value="{{ $category->name_category }}" required >
              </div>

              <div class="form-group">
                  <label >Description</label>
                  <textarea class="form-control" rows="3" name="description"  required>{{ $category->description }}</textarea>
              </div>              

              <button type="submit" class="btn btn-primary">Edit Category</button>
              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
          </form>
      </div>
  </div>
@endsection