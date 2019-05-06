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
        $mang= array(
        array(2,56,356,3,89),//0
        array(45,89,35,6,9));//1
       
       $max = $mang[0][0];
        for($hang =0;$hang<count($mang); $hang++ ){
            for($cot=0; $cot<count($mang[$hang]); $cot++ ){
                if($mang[$hang][$cot]>$max){
                    $max = $mang[$hang][$cot];
                }
            }
        }
        echo 'max trong 2 mảng = '.$max;
    ?>
</body>
</html>