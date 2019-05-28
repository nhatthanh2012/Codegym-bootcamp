@extends('layout.home')
@section('title', 'Post List')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>POST LIST</h2>
        </div> 
        <div class="col-md-12">
          <form action="{{ route('post.search') }}" method='get'>
                <input type="text" name='key' placeholder='enter your keyword'>
                <input type="submit" value='search'>
          </form>
      </div>       
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">CONTENT</th>
                    <th scope="col">WRITER</th>
                    <th scope="col">CATEGORY NAME</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $key => $post)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->writer }}</td>
                    <td>{{ $post->category->name_category }}</td> 
                    <td><a href="{{ route('post.show', $post->id) }}">SHOW</a></td>               
                    <td><a href="{{ route('post.edit', $post->id) }}">EDIT</a></td>
                    <td><a href="{{ route('post.delete', $post->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">DELETE</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {!! $posts->links() !!}
            <a href="{{ route('post.create') }} " class="btn btn-primary">ADD NEW POST</a>
        </div>
    </div>
@endsection