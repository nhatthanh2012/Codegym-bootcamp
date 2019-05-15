
<table border='1'>
    <h2><caption>OFFICES LIST</caption></h2>
    <tr>
        <th>officeCode</th>
        <th>city</th>
        <th>phone</th>
        <th>addressLine1</th>
        <th>addressLine2</th>
        <th>state</th>
        <th>postalCode</th>
        <th>territory</th>    
    </tr>
        
    <?php
        
        $connect = new PDO("mysql:host=localhost;dbname=classicmodels", 'root', '');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "SELECT * FROM offices";
        $statement = $connect->prepare($sql);      
        $statement->execute();    
        $statement->setFetchMode(PDO::FETCH_ASSOC);  
        $result = $statement->fetchAll();    
        foreach ($result as $item)
        {
            echo '<tr>';
            echo '<td>'.$item["officeCode"].'</td>';
            echo '<td>'.$item["city"].'</td>';
            echo '<td>'.$item["phone"].'</td>';
            echo '<td>'.$item["addressLine1"].'</td>';
            echo '<td>'.$item["addressLine2"].'</td>';
            echo '<td>'.$item["state"].'</td>';
            echo '<td>'.$item["postalCode"].'</td>';  
            echo '<td>'.$item["territory"].'</td>';  
            // echo "<td><a href= 'delete.php?id=$officeCode'>Xoa</a>
            // |<a href= 'edit.php?id=$officeCode'>sua</a></td>";
            echo '</tr>';   
        }
    ?>
</table>

<form method='post'>
        <table>
            <tr>
                <td>officeCode</td>
                <td><input type = 'text' name = 'officeCode'></td>
            </tr>
            <tr>
                <td>city</td>
                <td><input type = 'text' name = 'city'></td>
            </tr>
            <tr>
                <td>phone</td>
                <td><input type = 'text' name = 'phone'></td>
            </tr>
            <tr>
                <td>addressLine1</td>
                <td><input type = 'text' name = 'addressLine1'></td>
            </tr>
            <tr>
                <td>addressLine2</td>
                <td><input type = 'text' name = 'addressLine2'></td>
            </tr>
            <tr>
                <td>state</td>
                <td><input type = 'text' name = 'state'></td>
            </tr>
            <tr>
                <td>postalCode</td>
                <td><input type = 'text' name = 'postalCode'></td>
            </tr>
            <tr>
                <td>territory</td>
                <td><input type = 'text' name = 'territory'></td>
            </tr>
           
            <tr>                
                <td colspan ='2'><input type = 'submit' value = 'ADD NEW OFFICES' name = 'insert'></td>
            </tr>
        </table>
</form>
<?php
        if(isset($_POST['insert']))
        {
            
            $connect = new PDO("mysql:host=localhost;dbname=classicmodels", 'root', '');

            $officeCode = $_POST['officeCode'];
            $city = $_POST['city'];
            $phone = $_POST['phone'];
            $addressLine1 = $_POST['addressLine1'];
            $addressLine2 = $_POST['addressLine2'];
            $state = $_POST['state'];
            $phone = $_POST['phone'];
            $postalCode = $_POST['postalCode'];
            $territory = $_POST['territory'];

            $sql = "INSERT INTO offices VALUE('$officeCode', '$city', '$phone', '$addressLine1',
            '$addressLine2', '$state', '$phone', '$postalCode','$territory')";
            // var_dump($sql);
            $statement = $connect->prepare($sql); 
            $statement->execute();    
            var_dump($statement->execute()); 
            $statement->setFetchMode(PDO::FETCH_ASSOC);  
            $result = $statement->fetchAll();   
            header('location:offices.php');            
        }
        
?>


   
