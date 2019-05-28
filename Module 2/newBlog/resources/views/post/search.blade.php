@extends('layout.home')
@section('title', 'Post List')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>POST LIST</h2>
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
                </tr>
                @endforeach
                </tbody>
            </table>
           
            <a href="{{ route('post.index') }} " class="btn btn-primary">BACK</a>
        </div>
    </div>
@endsection