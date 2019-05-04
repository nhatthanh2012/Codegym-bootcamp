<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.login{
    height: 250px;
    width: 200px;
    border: 2px #CCC solid;
    margin: 0px;
    padding: 10px;
};
.login input {
          padding:5px; margin:5px;        
    }
 
</style>
<body>
<form  method = 'post'>
    <div class='login' > 
    <h2>LOGIN</h2>
    <input type='text' name='user' placeholder=' enter username'><br><br>
    <input type= 'password' name = 'pass' placeholder='enter password'><br><br>
    <input type= 'submit' name = 'submit' value='Sign in'>
    </div>
</form>
<?php 
    if($_SERVER["REQUEST_METHOD"]==='POST'){
        $username =$_POST['user'];
        $password = $_POST['pass'];
        if ($username=== 'admin' && $password=== 'admin'){
            echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
        } else {
            echo "<h2><span style='color:red'>Login Error</span></h2>";
        }
    }
?>

</body>
</html>