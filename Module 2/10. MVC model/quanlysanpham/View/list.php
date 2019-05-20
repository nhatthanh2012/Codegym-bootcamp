<div>
    <form action="" method = 'get'>
        <table>
            <tr>
                <input type="hidden" name = 'controller' value = 'product'>
                <td><input type="text" name='tukhoa' value = ''></td>
                <td><input type="submit" value = 'tìm kiếm'></td>
            </tr>
        </table>
        <input type="hidden" name = 'page' value = 'search'>
    </form>
</div>
<h1>DANH SÁCH SẢN PHẨM</h1>
<a href="./index.php?controller=product&page=add">Thêm sản phẩm mới</a>
<table>
    <tr>
        <th>STT</th>        
        <th>NAME</th>
        <th>PRICE</th>
        <th>DESCRIPTION</th>
        <th>PRODUCER</th>    
        <th>HANDLE</th>   
    </tr>
<tbody>
    <?php foreach($products as $stt=>$value):?>
    <tr>    
        <td><?php echo ++$stt ?></td>        
        <td><?php echo $value['name'] ?></td>
        <td><?php echo $value['price'] ?></td>
        <td><?php echo $value['description'] ?></td>
        <td><?php echo $value['producer'] ?></td>
        <td>
            <a href="index.php?controller=product&page=edit&id=<?php echo $value['id']; ?>">EDIT</a>
            <a onclick = "return confirm('bạn có chắc muốn xóa không ?')"  href="index.php?controller=product&page=delete&id=<?php echo $value['id']; ?>">DELETE</a>
        </td>            
    </tr>
    <?php endforeach; ?>  
</tbody> 
    
</table>