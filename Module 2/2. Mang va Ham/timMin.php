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
        <input type='text' name='chuoi'>
        <input type='submit' value = 'check'>
    <form>
    <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $chuoi = $_POST['chuoi'];
            $mang = explode(" ",$chuoi);
            $min = $mang[0];
            $length = count($mang);
            for($i=0; $i<$length; $i++){
                if($mang[$i]<$min){
                    $min = $mang[$i];
                }
            } 
            echo "min = ".$min;
            
        }
    ?>
</body>
</html>