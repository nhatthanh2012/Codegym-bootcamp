<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DICTIONARY</title>
</head>
<body>
    <form action="/dictionary" method = 'post'>
    @csrf
    Nhập từ cần tìm: <input type="text" name = 'word'>
    <input type="submit" value = 'search'>
    </form>
</body>
</html>