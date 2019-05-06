<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
form{
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>
<body>
    <!-- /* tao form*/ -->
    <form method = 'post'>
        FROM <input type='text' name='from'>
        TO <input type='text' name='to'>
        <input type='submit' value= 'seach'>
    </form>
    <!-- tao array khach hang -->
    <?php
     $list_danhsach = array(
        '1'=>array("name" => "Mai Văn Hoàn", "ngaysinh" => "1983/08/20", "diachi" => "Hà Nội", ),
        '2'=>array("name" => "Nguyễn Văn Nam", "ngaysinh" => "1983/08/21", "diachi" => "Bắc Giang"),
        '3'=>array("name" => "Nguyễn Thái Hòa", "ngaysinh" => "1983/08/22", "diachi" => "Nam Định", ),
        '4'=>array("name" => "Trần Đăng Khoa", "ngaysinh" => "1983/08/17", "diachi" => "Hà Tây",),
        '5'=>array("name" => "Nguyễn Đình Thi", "ngaysinh" => "1983/08/19", "diachi" => "Hà Nội", )
    );
   
    // tao function tim kiem 
    function timKiemKH($danhsach, $from_date, $to_date){
            if(empty($from_date) && empty($to_date)){
                return $danhsach;
            }
            $loc_danhsach = [];
            foreach($danhsach as $danhsach){
                if(!empty($from_date) && strtotime($danhsach['ngaysinh'])<strtotime($from_date))
                continue;
                if(!empty($to_date) && strtotime($danhsach['ngaysinh'])>strtotime($to_date))
                continue;
                $loc_danhsach[] = $danhsach;
            }
            return $loc_danhsach;

    }

    // goi ham
    $from_date = null;
    $to_date = null;
    if($_SERVER["METHOD_REQUEST"]==='POST'){
        $from_date = $_POST['from'];
        $to_date = $_POST['to'];
    
    $loc_danhsach= timKiemKH($list_danhsach, $from_date, $to_date);
}
    ?>
    <!-- hien thi  -->
     <table border = '1'>
        <caption><h2>DANH SÁCH KHÁCH HÀNG</caption></h2>        
        <tr>
            <th>HỌ TÊN</th>
            <th>NGÀY SINH</th>
            <th>ĐỊA CHỈ</th>
        </tr>
    <?php if(count($list_danhsach)===0): ?> 
        <tr>
            <td colspan = '3'>Không tìm thấy khách hàng nào</td>
        </tr> 
    <?php endif;?>      
    <?php   
    foreach($list_danhsach as $key => $value){
        echo '<tr>' ;
        echo '<td>'.$value['name'].'</td>';
        echo '<td>'.$value['ngaysinh'].'</td>';
        echo '<td>'.$value['diachi'].'</td>';
        echo '</tr>';
    }   
    ?>
    
    </table> 

</body>
</html>