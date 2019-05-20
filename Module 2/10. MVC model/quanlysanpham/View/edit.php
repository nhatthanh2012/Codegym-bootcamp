<h1>CHỈNH SỬA THÔNG TIN SẢN PHẨM</h1>
<a href="./index.php?controller=product&page=list">Danh sách</a>
<table>
    <form action="" method = 'post'>
        <tr>
            <td>NAME</td>
            <td><input type="text" name = 'name' value = <?php echo $dataId['name'] ?>></td>
        </tr>
        <tr>
            <td>PRICE</td>
            <td><input type="text" name = price value = <?php echo $dataId['price'] ?>></td>
        </tr>
        <tr>
            <td>DECRIPTION</td>
            <td><input type="text" name = 'description'value = <?php echo $dataId['description'] ?>></td>
        </tr>
        <tr>
            <td>PRODUCER</td>
            <td><input type="text" name = 'producer'value = <?php echo $dataId['producer'] ?>></td>
        </tr>
        <tr>            
            <td colspan = '2'><input type="submit" name = 'editproduct' value = 'EDIT PRODUCT'></td>
        </tr>
    </form>
</table>