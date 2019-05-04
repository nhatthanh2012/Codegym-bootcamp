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
        function kiemtraSNT($n){
            $flag = true;
            if($n<2){
                $flag = false;
            }
            for($i=2; $i<$n; $i++){
                if ($n % $i===0){
                    $flag = false;
                }
            }
            return $flag;        
        }
        $count= 0;
        $num=2;
        while ($count<20){
            if(kiemtraSNT($num)){
                $count++;
                echo '20 số nguyên tố đầu tiên : '.$num.'<br>';
            } $num++;
        }
    ?>
</body>
</html>