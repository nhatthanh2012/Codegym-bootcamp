<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    
</head>
<body>
<table>
    <form action="{{url('login')}}" method = 'post'>
        
        <label for="">LOGIN</label>
       <tr>
            <td>Email</td> 
            <td><input type="text" name = 'email'></td>      
       </tr>
        <tr>   
            <td>Password</td> 
            <td><input type="password" name = 'password'></td>   
        </tr>
        {!!csrf_field()!!}
        <tr>
            <td colspan = '2'> <input type="submit" value = 'submit'></td>
        </tr>
       
    </form>

    </table>
</body>
</html>