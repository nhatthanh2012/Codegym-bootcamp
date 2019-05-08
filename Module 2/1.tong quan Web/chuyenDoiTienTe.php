<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
h2{
    color: navy;
}
</style>
<body>
    <h2>CHUYỂN ĐỔI TIỀN TỆ</h2>
    <form method='post'>
        <input type='number' name='sotien'>
        <select name='tuychon'>
            <option value='usd'>VND to USD</option>
            <option value='vnd'>USD to VND</option>
        </select>
        <br><input type='submit' value='CONVERT'>
    </form>
    <?php        
        if($_SERVER["REQUEST_METHOD"]==='POST'){
            $sotien = $_POST['sotien'];
            $tuychon= $_POST['tuychon'];
        
        $result = 0;
        switch($tuychon){
            case 'usd': 
                $result = $sotien/23000;
                break;
            case 'vnd': 
                $result = $sotien*23000;
                break;
        }
     
        echo $result; 
    }       
    ?>

</body>
</html>