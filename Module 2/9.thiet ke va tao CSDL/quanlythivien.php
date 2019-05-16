<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
   
    
    </style>
</head>
<body>
<div>
    <table name = 'student' border='1'>
        <h2><caption>CATEGORIES LIST</caption></h2>
        <tr>
            <th>STT</th>
            <th>categoryCode</th>
            <th>categoryName</th>
            <th>textDecription</th>
        </tr>

      <?php
        $connect = mysqli_connect('localhost', 'root', '', 'library_management') or die('khong ket noi');
        $sql = 'SELECT * FROM categories';
        $result = mysqli_query($connect, $sql);
        $stt = 0;
        while ($row = mysqli_fetch_array($result))
        {
            $stt ++;
            echo '<tr>';
            echo '<td>'.$stt.'</td>';
            echo '<td>'.$row["categoryCode"].'</td>';
            echo'<td>'.$row["categoryName"].'</td>';
            echo '<td>'.$row["textDecription"].'</td>';
            echo '</tr>';
        }        
      ?>
    </table>

    <form>
        <table>
            <tr>
                <td>category Code</td>
                <td><input type = 'text' name = 'categoryCode'></td>
            </tr>
            <tr>
                <td>category Name</td>
                <td><input type = 'text' name = 'categoryName'></td>
            </tr>
            <tr>
                
                <td colspan ='2'><input type = 'submit' value = 'ADD NEW CATEGORY' name = 'insert'></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['insert']))
        {
            $categoryCode = $_POST['categoryCode'];
            $categoryName = $_POST['categoryName'];
            $sql = "INSERT INTO categories VALUE('$categoryCode', '$categoryName') ";
            mysqli_query($connect, $sql) or die ('fail');
            header(location:quanlythivien.php);
        }
    ?>
</div>
</body>
</html>