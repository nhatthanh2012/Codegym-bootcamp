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
    for($i=2; $i<100; $i++){
        if(kiemtraSNT($i)){
            echo $i.'<br>';
        }
    }
    ?>

</body>
</html>