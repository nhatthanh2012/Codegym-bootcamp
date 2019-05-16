<?php
    require "Model/DBuser.php";
    $database = new DataUser();
    $database->connect();

    if(isset($_GET['controller']))
    {
        $controller = $_GET['controller'];
    }
    else 
    {
        $controller = '';
    }

    switch($controller)
    {
        case 'user': 
            require_once "Controller/controllerUser.php";
    }
?>