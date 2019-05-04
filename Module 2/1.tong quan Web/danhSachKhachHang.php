<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table {
    border: 2px solid;
    border-collapse: collapse;
    width: 60%;
}
    th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>
<body>
    <table>
        <caption><b>DANH SÁCH KHÁCH HÀNG</b> </caption>
        <tr>
            <th>Tên</th>
            <th>Ngày Sinh</th>
            <th>Địa chỉ</th>            
        </tr>    
    

<?php 
    $danhSachKH = array(
        "1" => array("ten" => "Mai văn Hoang",
                    "ngaysinh" => "01/02/1986",
                    "diachi" => " Hà Nội"),
        '2' => array('ten' => 'hoàng công lương',
                    'ngaysinh' => '05/04/1979',
                    'diachi' => 'Hà Tĩnh'),
        '3'=> array('ten'=>'Mai Quốc Khải',
                    'ngaysinh'=> '04/09/1985',
                    'diachi'=>'Lào cai'),
        '4' => array('ten'=>'Trần Tuấn Kiệt',
                    'ngaysinh'=>'12/12/1998',
                    'diachi'=>'TPHCM'),
        '5'=> array('ten'=>'trương văn quang',
                    'ngaysinh'=> '1/5/2001',
                    'diachi'=>'Đồng Nai')
    );
    foreach($danhSachKH as $key => $value){
        echo '<tr>';       
        echo '<td>'.$value['ten'].'</td>';
        echo '<td>'.$value['ngaysinh'].'</td>';
        echo '<td>'.$value['diachi'].'</td>';
        echo '</tr>';

    }
?>
</table>
</body>
</html>