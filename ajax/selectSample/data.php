<?php
	require("connect.php");
	$key = $_POST['id'];
	$sql = "select * from tinh where id_category = '$key'";
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