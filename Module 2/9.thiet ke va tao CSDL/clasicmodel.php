<?php
    
    $connect = new PDO('mysql:localhost; dbname = classicmodels','root','');
    if($connect)
    {
        echo ' successful connection';
    }
    else 
    {
        echo 'fail error';
    } 
    
   
      
?>



