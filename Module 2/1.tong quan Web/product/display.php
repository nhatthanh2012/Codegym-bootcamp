<?php
    if($_SERVER["REQUEST_METHOD"]==='POST'){
        $name= $_POST['tensp'];
        $price = $_POST['gia'];
        $discount = $_POST['chietkhau'];
    }
    $tienchietkhau = $price *$discount*0.1;
    echo 'Tên sản phẩm: '.$name;
    echo '<br> Số tiền chiết khấu: '.$tienchietkhau
?>