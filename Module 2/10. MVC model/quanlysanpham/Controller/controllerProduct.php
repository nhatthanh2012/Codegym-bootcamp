<?php
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else 
    {
        $page = '';
    }

    switch($page)
    {
        case 'add':
            if(isset($_POST['addproduct']))
            {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $producer = $_POST['producer'];
                $add = $database->insertProduct($name, $price, $description, $producer);
                if($add)
                {
                    echo 'thêm mới thành công';
                }
                else 
                { 
                    echo 'thông tin chưa được cập nhật';
                }
            }
            require "View/add.php";
            break;

        case 'edit':
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $dataId = $database->getProduct($id);
               
                if(isset($_POST['editproduct']))
                {
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $producer = $_POST['producer'];
                    $edit = $database->editProduct($id, $name, $price, $description, $producer);
                    if($edit)
                    {
                        header('location:index.php?controller=product&page=list');
                    }
                }
            }
            require "View/edit.php";
            break;

        case 'delete':
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];                               
                $delete = $database->deleteProduct($id);
                if($delete)
                {
                    header('location:index.php?controller=product&page=list');
                }
            }
            //require "View/edit.php";
            break;
        
        case 'search':
            if(isset($_GET['tukhoa']))
            {
                $keyword = $_GET['tukhoa'];
                $dataSearch = $database->SearchName($keyword);
                var_dump($dataSearch);
            }
            require "View/search.php";
            break;

        case 'list':
            $products = $database->getAllProducts();           
            require "View/list.php";
            break;
        default:
            require "View/list.php";
            break;
    }
?>