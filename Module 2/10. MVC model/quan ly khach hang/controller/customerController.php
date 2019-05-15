<?php
    if(isset($_GET['action']))
    {
        $action = $_GET['action'];
    } else
    {
        $action = '';
    }

    switch($action)
    {
        case 'add':
        {
            require_once('view/add_customer.php');
        }
    }
?>