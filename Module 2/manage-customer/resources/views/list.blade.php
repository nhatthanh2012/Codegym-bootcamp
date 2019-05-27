<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>danh sach</title>
</head>
<body>
    <table border = '1'>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>DOB</th>
            <th>EMAIL</th>           
            <th>CREATE AT</th>
            <th>ACTION</th>
        </tr>
        
        @foreach($customers as $value)
        <tr>        
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->dob }}</td>
            <td>{{ $value->email }}</td>           
            <td>{{ $value->created_at }}</td>  
            <td>
                <a href="{{ route('edit', $value->id) }}">EDIT</a>
                <a href="{{ route('destroy', $value->id) }}">DELETE</a>
                <a href="{{ route('create') }}">ADD</a>            
            </td>                  
        </tr>
        @endforeach
    </table>
</body>
</html>