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
                    <th scope="col">TITLE</th>
                    <th scope="col">CONTENT</th>
                    <th scope="col">WRITER</th>
                    <th scope="col">CATEGORY NAME</th>                  
                </tr>
                </thead>
                <tbody>                
                <tr>                    
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->writer }}</td>
                    <td>{{ $post->category->name_category }}</td>                                        
                </tr>                                      
                </tbody>
            </table>            
            <a href="{{ route('category.create') }} " class="btn btn-primary">ADD NEW CATEGORY</a>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">BACK</button>
        </div>
    </div>
@endsection