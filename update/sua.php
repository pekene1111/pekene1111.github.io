<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>


<style>
	.span
	{
		display: block;
		color: red;
	}
	
</style>



















<body>
	
	<form action="" method="POST">

		<span class="span">Nhập ID thửa đất cần thay đổi</span>
		<input class="input" type="number" name="thua_dat_id">

		<span class="span">Nhập ID thửa đất mới </span>
		<input class="input" type="text" name="new_id_thua_dat">
		
		<span class="span">&nbsp</span>
		<input type="submit" name="xac_nhan" value="Thay đổi">
	</form>

<?php 

$connect= ("host=localhost port=5432 dbname=bai_giua_ki user=postgres password=daikamy0");
$db_connection= pg_connect($connect) ;

 ?>


 <?php 
 		if (isset($_POST['xac_nhan'])) 
 		{
 			$td_id=$_POST['thua_dat_id'];
 		$new_name=$_POST['new_id_thua_dat'];

 		$query="UPDATE thua_dat SET thua_dat_id= '$new_name' WHERE thua_dat_id='$td_id' ";
 		pg_query($query);

	 		if (pg_query($query)==true) 
	 		{
	 			echo "okkk";
	 		}
	 		else echo "loi roi";
 		}
 	
 		
  ?>

</body>
</html>