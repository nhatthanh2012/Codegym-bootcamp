<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input[type=number] {
        width: 30%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        }
    </style>
<body>
    <form method='post'>
    <input type='number' name='soA'><br>
    <input type='number' name='soB'><br>
    <select name='pheptinh'>
        <option value='phepcong'>Phép Cộng (+)</option>
        <option value='pheptru'>Phép Trừ (-)</option>
        <option value= 'phepnhan'>Phép Nhân (x)</option>
        <option value ='phepchia'>Phép Chia (:)</option>
    </select>
    <input type ='submit' value ='Calculate'>
    </form>
    
    <?php
        $result=0;
       function chia($_a, $_b){
           if($_b===0){
               throw new Exception(' a phải KHÁC 0');
           }
           return $_a/$_b;
       }
       
        if($_SERVER["REQUEST_METHOD"]==='POST'){
            $soA= (int) $_POST['soA'];
            $soB= (int) $_POST['soB'];
            $pheptinh= $_POST['pheptinh'];
        
        
        switch ($pheptinh) {
            case 'phepcong':
            echo $result = $soA + $soB;
                break;            
            case 'pheptru':
            echo $result = $soA - $soB;
                break;
            case 'phepnhan':
            echo   $result = $soA * $soB;
                break;
            case 'phepchia':
               
                try {
                    echo chia($soA,$soB);
                    
                } catch(Exception $exception){
                    echo ' lỗi ...' .$exception ->getMessage();
                }
                break;
        }      
        

    };
    
    ?>

    

</body>
</html>