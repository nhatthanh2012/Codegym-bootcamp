@extends('home')
@section('title', 'CUSTOMER LIST')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Danh sách công viêc</h2>
        </div>
       
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">DOB</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">CREATE AT</th>
                    <th scope="col">ACTION</th>
                    <th></th>
                    <th></th>                    
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $value)
                <tr>        
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->dob }}</td>
                    <td>{{ $value->email }}</td>           
                    <td>{{ $value->created_at }}</td> 
                    <td><a href="{{ route('edit', $value->id) }}">EDIT</a></td>
                    <td><a href="{{ route('destroy', $value->id) }}" class="text-danger" 
                        onclick="return confirm('BẠN CÓ CHẮC MUỐN XÓA')">DELETE</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('create') }}" class="btn btn-primary">ADD NEW CUSTOMER</a>
        </div>
    </div>
@endsection