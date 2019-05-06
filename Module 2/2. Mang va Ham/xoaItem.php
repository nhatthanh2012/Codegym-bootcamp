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
        $mang = array(21,5,4,6,9,7,2,78);
        $x = 5;
        $length = count($mang);
        $index_del;
        for($i=0; $i<$length; $i++){
            if($mang[$i]===$x){
                $index_del= $i;
                $mang[$index_del] = $mang[$index_del+1];

            }
        }
        foreach($mang as $number){
            echo ' '.$number;
        }                 
    ?>
</body>
</html>