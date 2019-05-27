<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>them moi khach hang</title>
</head>
<body>
<table>
    <form action="{{ route('store') }}" method ='post'>
        @csrf
        <tr>
            <td>NAME</td>
            <td><input type="text" name = 'name'></td>
        </tr>
        <tr>
            <td>DOB</td>
            <td><input type="date" name = 'dob'></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" name = 'email'></td>
        </tr>
        <tr>            
            <td colspan = '2'><input type="submit" value = 'ADD'></td>
        </tr>
    </form>
</table>
</body>
</html>