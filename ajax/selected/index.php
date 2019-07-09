<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Title</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="text-center">SELECT BOX</div>
    </div>
    <div class="row">
        
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <select name="form-control city" >
                <option value="">-- Chọn tỉnh, thành phố --</option>
                    <?php 
                         $conn = new mysqli("localhost", 'root', 'password', 'production');
                         // Check connection
                         if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "select * from province";                        
                        $result = $conn->query($sql);
                        $num = $result->num_rows($result);                        
                        if ($num > 0) {
                            while($row = $result->fetch_assoc()){                            
                    ?>
                       <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                    <?php       
                            }
                        }
                    ?>
                ?>
            </select>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <select name="form-control city" >
                <option value="">-- Quận huyện tương ứng --</option>
            </select>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
