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
       
        if($_SERVER["REQUEST_METHOD"]==='POST'){
            $soA=  $_POST['soA'];
            $soB=  $_POST['soB'];
            $pheptinh= $_POST['pheptinh'];
        
        $result=0;
        switch ($pheptinh) {
            case 'phepcong':
                $result = $soA + $soB;
                break;            
            case 'pheptru':
                $result = $soA - $soB;
                break;
            case 'phepnhan':
                $result = $soA * $soB;
                break;
            case 'phepchia':
                $result = $soA/$soB;
                break;
        }
        echo 'KẾT QUẢ LÀ: ' . $result;
    };
    ?>

</body>
</html>