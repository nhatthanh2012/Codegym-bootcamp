<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
        <form action="" method = 'get'>
            <input type="email" name = 'email' value = "{{request('email')}}">
            <input type="submit" value = 'check'>
        </form>
   @if(!empty(request('email')))
    result: {{ $check?'email true': 'email false' }}
    @endif
</body>
</html>