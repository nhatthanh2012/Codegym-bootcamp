<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Select Box</title>
	<link rel="stylesheet" href="http://bootswatch.com/cosmo/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js" type="text/javascript"></script>
	<script src="ajax.js" type="text/javascript"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<h3 class="text-center">SELECT BOX</h3>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<select class="form-control city" id="select">
				    <option value="">Thành phố</option>
				    <?php
						require("connect.php");
						$sql = "select * from thanh_pho";
						$query = mysql_query($sql);
						$num = mysql_num_rows($query);
						if($num > 0){
							while($row = mysql_fetch_array($query)){

							
				    ?>
				    <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>

				    <?php
				    		}
						}
				    ?>
				    
				</select>
			</div>
			<div class="col-md-4">
				<select class="form-control tinh" id="select">
				   <option value="0">Tỉnh thành</option>

				</select>
			</div>
		</div>
	</div>
</body>
</html>