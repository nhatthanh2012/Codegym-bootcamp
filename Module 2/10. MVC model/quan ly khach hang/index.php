<?php 
    require "Model/customerDB.php";
    $database = new CustomerDB;
    $database->connect();

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
            require_once('controller/customerController.php');
        }
    }
?>