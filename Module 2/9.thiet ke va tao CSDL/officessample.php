<?php
try {
    // Kết nối CSDL
    $conn = new PDO("mysql:host=localhost;dbname=classicmodels", 'root', '');
     
    // Khai báo exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    // Sử đụng Prepare 
    $stmt = $conn->prepare("SELECT * FROM offices"); 
     
    // Thực thi câu truy vấn
    $stmt->execute();
 
    // Khai báo fetch kiểu mảng kết hợp
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
    //var_dump($result);
    // Lặp kết quả
    foreach ($result as $item){
       echo $item["officeCode"].'<br>';
       echo $item ["city"].'<br>';
       echo $item["phone"].'<br>';
       echo $item["addressLine1"].'<br>';
       echo $item["addressLine2"].'<br>';
       echo $item["state"].'<br>';
       echo $item["postalCode"].'<br>';  
       echo $item["territory"].'<br>';
       
    }
}
catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}
 
// Ngắt kết nối

?>