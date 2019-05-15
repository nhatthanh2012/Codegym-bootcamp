<?php 
    require "model/customerDB.php";
    $db = new CustomerDB;
    $db->connect();

    if(isset($_GET['controller']))
    {
        $controller = $_GET['controller'];
    } else
    {
        $controller = '';
    }

    switch($controller)
    {
        case 'khach-hang':
        {
            require_once('controller/index.php');
        }
    }
?>