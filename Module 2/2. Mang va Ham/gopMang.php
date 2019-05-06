<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method='post'>
        <input type='text' name='chuoi1' placeholder='vd: 1 2 6 8 '>
        <input type='text' name='chuoi2' placeholder='vd: 1 2 6 8 '>
        <input type='submit' value='Gộp 2 mảng'>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $chuoi1=$_POST['chuoi1'];
            $chuoi2= $_POST['chuoi2'];
            $chuoi3= $chuoi1 . $chuoi2;
            $mang3= explode(" ",$chuoi3);
            foreach ($mang3 as $number){
                echo $number. ' ';
            }
        }
    ?>
</body>
</html>