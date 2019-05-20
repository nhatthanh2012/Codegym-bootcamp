<?php
    require "Model/DBproduct.php";
    $database = new DBproducts();
    $database->connectDB();

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
        case 'product':
            require "Controller/controllerProduct.php";
    }
?>

