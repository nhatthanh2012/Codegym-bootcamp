<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THÊM KHÁCH HÀNG</title>
</head>
<body>
    <div class = 'themkhachhang'>
        <a href="index.php?controller=khach-hang&action=list">Danh sách</a>        
        <h3>THÊM KHÁCH HÀNG</h3>  
            <div>     
            <table border = '1'>
                <form action = '' method = 'post'>
                    <tr>
                        <td>NAME</td>
                        <td><input type="text" name= 'name' placeholder= 'nhap ten'></td>
                    </tr>
                    <tr>
                        <td>EMAIL</td>
                        <td><input type="text" name= 'email' placeholder= 'nhap email'></td>
                    </tr>
                    <tr>
                        <td>ADDRESS</td>
                        <td><input type="text" name= 'address' placeholder= 'nhap address'></td>
                    </tr>
                    <tr>                   
                        <td colspan='2'><input type="submit" name= 'addcustomer' value='ADD CUSTOMER' placeholder= 'nhap ten'></td>
                    </tr>
                </form>
                <?php
                if(isset($thanhcong) && in_array('add_success', $thanhcong))
                {
                    echo '<p>them moi thanh cong</p>';
                } else
                {
                    echo 'fail addition';
                }
            ?>
            </table>
           
        </div>
    </div>
</body>
</html>

