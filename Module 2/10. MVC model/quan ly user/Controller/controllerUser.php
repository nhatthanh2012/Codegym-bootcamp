cicontroller

<?php
:cicontroller->tab  

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
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                $deleteData = $database->deleteData($id);
                if($deleteData)
                {
                    header('location: index.php?controller=user&page=list');
                }
            } 
            require "View/delete.php";
            break;
        case 'edit':
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                $dataId = $database-> getDataId($id);
                if(isset($_POST['edit']))
                {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $fullname = $_POST['fullname'];
                    $birthday = $_POST['birthday'];
                    $email = $_POST['email'];
                    $editUser = $database->editUser($id, $username, $password, $fullname, $birthday, $email);                    
                   
                    if($editUser)
                    {
                        header('location:index.php?controller=user&page=list');
                    }
                    else 
                    {
                        echo 'please try again';
                    }
                }
                // if(isset($_GET['id']))
                // {
                //     $id = $_GET['id'];
                //     $dataId = $database->getDataId($id);
                //     // lay du lieu tu view
                //     if(isset($_POST['editcustomer']))
                //     {
                //         $name = $_POST['name'];
                //         $email = $_POST['email'];
                //         $address = $_POST['address'];
    
                //         // truyen du lieu lay dc tu view sang model
                //         $editCustomer = $database->updateData($id,$name, $email, $address);
                //         if($editCustomer)
                //         {
                //             header('location:index.php?controller=khach-hang&action=list');
                //         }
                //     }
                // }
               
            }
            require "View/edit.php";
            break;
    }
    
?>