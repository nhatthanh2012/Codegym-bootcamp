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
        $mang = array(21,5,4,6,9,7,2,5,78);
        $x = 5;
        $length = count($mang);
        $index_del = array();
        $index_i = -1;
        for($i=0; $i<$length; $i++){
            if($mang[$i]===$x){
                if($index_i === -1) {
                    $index_i = 0;
                }
                $index_del[$index_i]=$i;
                $index_i++;               
                // echo 'index_del: '.$index_del =$i.'<br>';          
            }
        }

        var_dump($index_del);

        // for($index_del; $index_del< $length - 1; $index_del++){
        //     $mang[$index_del] = $mang[$index_del+1];           
        // }

        // var_dump($mang);

        // foreach($mang as $key => $value){
        //     echo $value . '  ';
        // }
      
        

       
        
    ?>    
</body>
</html>