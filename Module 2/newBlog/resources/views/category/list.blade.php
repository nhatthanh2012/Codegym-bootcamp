@extends('layout.home')
@section('title', 'Category List')
@section('content')
     <div class="col-12">
           <div class="row">
               <div class="col-12"><h1>Category List</h1></div>
               <div class="col-12">
                   @if (Session::has('success'))
                      <p class="text-success">
                         <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                      </p>
                   @endif
               </div>
          <table class="table table-striped">
          <thead>
          <tr>
                <th scope="col">#</th>
                <th scope="col">CATEGORY NAME</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">ACTION</th>
                <th></th>
                <th></th>
          </tr>
          </thead>
          <tbody>
          @if(count($categories) == 0)
          <tr><td colspan="3">Không có dữ liệu</td></tr>
          @else
                @foreach($categories as $key => $category)
                <tr>
                      <th scope="row">{{ ++$key }}</th>
                      <td>{{ $category->name_category }}</td>
                      <td>{{ $category->description }}</td>                      
                      <td>
                            <a href="{{ route('category.edit', $category->id) }}">EDIT</a>
                            <a href="{{ route('category.delete', $category->id) }}" 
                                class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">DELETE</a>
                      </td>                      
                </tr>
                @endforeach
          @endif
          </tbody>
          </table>
          <a class="btn btn-primary" href="{{ route('category.create') }}">Add new category</a>
          </div>
      </div>
@endsection