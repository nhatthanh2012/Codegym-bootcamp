<?php
    if(isset($_GET['action']))
    {
        $action = $_GET['action'];
    } else
    {
        $action = '';
    }

    $thanhcong = array();
    switch($action)
    {
        case 'add':
        {
            if(isset($_POST['addcustomer']))
            {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];

                if($database->insertData($name, $email, $address))
                {
                   $thanhcong[] = 'add_success';
                }
            }
            require_once('View/add_customer.php');
            break;
        }
        case 'edit':
        {
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                $dataId = $database->getDataId($id);
                // lay du lieu tu view
                if(isset($_POST['editcustomer']))
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];

                    // truyen du lieu lay dc tu view sang model
                    $editCustomer = $database->updateData($id,$name, $email, $address);
                    if($editCustomer)
                    {
                        header('location:index.php?controller=khach-hang&action=list');
                    }
                }
            }
            require_once('View/edit_customer.php');
            break;
        }
        case 'delete':
        {
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                $deleteData = $database->deleteData($id);
                if($deleteData)
                {
                    header('location: index.php?controller=khach-hang&action=list');
                }
            }               
            require_once('View/delete_customer.php');
            break;
        }
        case 'list':
        {   
            $customers = $database->getAllData();
            require_once('View/list.php');
            break;
        }
        default:
        {
            require_once('View/list.php');
            break;
        }
        
    }
?>