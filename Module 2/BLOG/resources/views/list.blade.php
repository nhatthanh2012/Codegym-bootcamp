<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Blog</title>
</head>

<body>
<h1>List blog</h1>
    <table border = '1'>
        <tr>
            <th>STT</th>
            <th>ID</th>
            <th>TITLE</th>
            <th>CONTENT</th>
            <th>WRITER</th>
            <th>COMMENT</th>
            <th>ACTION</th>
        </tr>
        <tbody>
        @foreach($blogAll as $key=>$blog)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $blog->id }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->content }}</td>
            <td>{{ $blog->writer }}</td>
            <td>{{ $blog->comment }}</td>
            <td>
                <a href=" {{ route('show', $blog->id) }}">SHOW</a>
                <a href=" {{ route('create') }}">ADD</a>
                <a href="{{ route('edit', $blog->id) }}">EDIT</a>
                <a href="{{ route('destroy', $blog->id) }}" onclick= "return confirm('Are you sure to delete')">DELETE</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>