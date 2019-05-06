<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $mang = array(12,15,45,6,97,34,62);
        $min = $mang[0];
        for($i=0; $i<count($mang); $i++){
            if($mang[$i]<$min){
                $min=$mang[$i];
            }
        }
        echo 'min = '.$min;
    ?>
</body>
</html>