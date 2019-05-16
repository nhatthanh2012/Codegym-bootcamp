<?php
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = '';
    }

    switch ($page)
    {
        case 'register':
            if(isset($_POST['register']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $fullname = $_POST['fullname'];
                $birthday = $_POST['birthday'];
                $address = $_POST['address'];
                
                $register = $database->register($username,$password, $fullname, $birthday, $address);
                if($register)
                {
                    echo '<br> sucessful register';
                }
                else 
                {
                    echo '<br>Please try again';
                }
            }
            require "View/register.php";
            break;
        case 'login':
        if(isset($_POST['login']))
        {
            $_username = $_POST['username'];
            $_password = $_POST['password'];            
            
            $login = $database->login($_username, $_password);
            if($login== true)
            {
                echo header('location: View/edit.php');
            }
            
        }
            require "View/login.php";
            break;
        case 'list':
            $listusers= $database->getAllUser();            
            require "View/list.php";
            break;
        case 'delete':
            require "View/delete.php";
            break;
        case 'edit':
            require "View/edit.php";
            break;
    }
    
?>