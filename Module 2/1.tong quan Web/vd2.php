<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action='vd1.php' method='get'>
    Name <input type='text' name ='name'>
    Summit <input type = 'submit'>
    </form>
   <?php 
    $arrayClassThree = array('ai', 'hoang', 'rin', 'ba', 'thanh');
   foreach ($arrayClassThree as $key => $value)
   echo "$value"."<br>";
   ?>
</body>
</html>