<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SỬA KHÁCH HÀNG</title>
</head>
<body>

    <div class = 'suakhachhang'>           
        <h3>CẬP NHẬT THÔNG TIN KHÁCH HÀNG</h3>  
            <div>     
            <table border = '1'>
                <form action = '' method = 'post'>
                    <tr>
                        <td>NAME</td>
                        <td><input type="text" name= 'name' value= '<?php echo $dataId->name ?>' placeholder= 'nhap ten'></td>
                    </tr>
                    <tr>
                        <td>EMAIL</td>
                        <td><input type="text" name= 'email' value = '<?php echo $dataId->email ?>' placeholder= 'nhap email'></td>
                    </tr>
                    <tr>
                        <td>ADDRESS</td>
                        <td><input type="text" name= 'address' value = '<?php echo $dataId->address ?>' placeholder= 'nhap address'></td>
                    </tr>
                    <tr>                   
                        <td colspan = '2'><input type="submit" name= 'editcustomer' value='EDIT CUSTOMER'>
                        <a href="./index.php?controller=khach-hang&action=list">HUY</a></td>

                    </tr>
                </form>
               
            </table>
           
        </div>
    </div>
</body>
</html>

