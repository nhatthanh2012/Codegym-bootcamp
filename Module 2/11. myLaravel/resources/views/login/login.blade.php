<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>
<body>
<h1>LOGIN</h1>
<form action="/login" method = 'post'>
    <p>@csrf</p>
    <p><input type="text" name = 'username' placeholder = 'username'></p>
    <p><input type="password" name= 'password' placeholder = 'password'></p>
    <p><button type = 'submit' >LOGIN</button></p>
</form>
</body>
</html>