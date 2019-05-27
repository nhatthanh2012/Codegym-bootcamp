<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <form action="{{ route('update', $customer->id) }}" method ='post'>
        @csrf
        <tr>
            <td>NAME</td>
            <td><input type="text" name = 'name' value = '{{ $customer->name }}' required></td>
        </tr>
        <tr>
            <td>DOB</td>
            <td><input type="date" name = 'dob' value = '{{ $customer->dob }}' required></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" name = 'email' value = '{{ $customer->email }}'required></td>
        </tr>
        <tr>            
            <td colspan = '2'><input type="submit" value = 'edit' required></td>
        </tr>
    </form>
</table>
</body>
</html>