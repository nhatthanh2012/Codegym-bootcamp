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
        <input type="text" name = 'number1' placeholder = 'number 1'><br><br>
        <input type="text" name = 'number2' placeholder = 'number 2'><br><br>

        <input type="submit" name="pheptinh" value = 'Addtion'>
        <input type="submit" name="pheptinh" value = 'Subtraction(-)'>
        <input type="submit" name="pheptinh" value = 'Multiplication(*)'>
        <input type="submit" name="pheptinh" value = 'Division(/)'>
    </form>
    <p><?php echo $giatri ?></p>
</body>
</html>