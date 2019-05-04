<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    form{
        width: 450px;
        margin: 0 auto;
        padding: 0px 20px 20px;
        background: white;
        border: 2px solid blue;
        
    }
   

</style>
<body>
    <table>
        <form method = 'post'>  
        <tr>      
        <label>Investment Amount </label> 
        <input type = 'number' name = 'tienbandau'><br>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <label>Yearly Interest Rate</label> 
        <input type = 'number' name ='laisuatnam'><br>

        <label>Number of Years</label> 
        <input type = 'number' name ='sonam'><br>

        <input type='submit' value ='Calculator'id = 'submit'>
        
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"]==='POST'){
                $giatribandau = $_POST['tienbandau'];
                $laisuatnam = $_POST['laisuatnam'];
                $sonam = $_POST['sonam'];                
            };
            $giatrituonglai = $giatribandau + ($giatribandau*$laisuatnam/100);
            echo "$giatrituonglai"
        ?>

        </table>
</body>
</html>