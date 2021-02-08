<!DOCTYPE html>
<html>
<head>
	<title>xoa</title>
</head>
<body>
	
	<form action="" method="POST">

		<span>Nhập ID thửa đất cần xóa</span>
		<input type="number" name="thua_dat_id">
		
		<input type="submit" name="xac_nhan" value="Xóa">
	</form>

<?php 

$connect= ("host=localhost port=5432 dbname=bai_giua_ki user=postgres password=daikamy0");
$db_connection= pg_connect($connect) ;

 ?>


 <?php 
 		if (isset($_POST['xac_nhan'])) 
 		{
 			$td_id=$_POST['thua_dat_id'];
 		

 		$query="DELETE from thua_dat where thua_dat_id=$td_id ";
 		pg_query($query);
	 		if (pg_query($query)==true) {
	 			echo "okkk";
	 		}
	 		else echo "loi roi";
 		}
 	
 		
  ?>

</body>
</html>