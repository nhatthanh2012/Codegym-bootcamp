<h1>DANH SÁCH SẢN PHẨM</h1>
<a href="./index.php?controller=product&page=add">Thêm sản phẩm mới</a>
<table>
<tr>           
    <th>NAME</th>
    <th>PRICE</th>
    <th>DESCRIPTION</th>
    <th>PRODUCER</th>       
</tr>
<tbody>

<tr>               
    <td><?php echo $dataSearch['name'] ?></td>
    <td><?php echo $dataSearch['price'] ?></td>
    <td><?php echo $dataSearch['description'] ?></td>
    <td><?php echo $dataSearch['producer'] ?></td>            
</tr>

</tbody> 
</table>
