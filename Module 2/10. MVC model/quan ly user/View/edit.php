<div class="col-12">
          <h1>CẬP NHẬT THÔNG TIN USER </h1>
</div>

<a href="index.php?controller=user&page=list">Danh sach</a></a>
<table>
<form action="" method = 'post'>
    <tr>
        <td>USER NAME</td>
        <td><input type="text" name = 'username' value= '<?php echo $dataId->username ?>'></td>
    </tr>  
    <tr>
        <td>PASSWORD</td>
        <td><input type="password" name = 'password' value= '<?php echo $dataId->password ?>'></td>
    </tr>
    <tr>
        <td>FULLNAME</td>
        <td><input type="text" name = 'fullname' value= '<?php echo $dataId->fullname ?>'></td>
    </tr>
    <tr>
        <td>BIRTHDAY</td>
        <td><input type="text" name = 'birthday' value= '<?php echo $dataId->birthday ?>'></td>
    </tr>
    <tr>
        <td>EMAIL</td>
        <td><input type="text" name = 'email' value= '<?php echo $dataId->email ?>'></td>
    </tr>
    <tr>        
        <td colspan = '2'><input type="submit" value = 'Register' name = 'edit'></td>
    </tr>
    
</form>
</table>
