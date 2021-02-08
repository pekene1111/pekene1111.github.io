


<?php 
	
	if (isset($_POST["xac_nhan_kg"])) 
	{
		$kc=$_POST["khoang_cach"];
		$dia_diem=$_POST["place"];
		

		if ($kc=="") 
			{
				  echo '<script language="javascript">';
				  echo 'alert("Chưa nhập khoảng cách cần tìm")'; 
				  echo '</script>';
			}


		else
			{ 

?>


<table id="table" border="1" style="border-collapse: collapse;">
	<caption>THÔNG TIN CỦA THỬA ĐẤT</caption>
	<tr>
		<th>STT</th>
		<th>ID thửa đất</th>
		<th>Khoảng cách đến <?php echo "$dia_diem";  ?></th>
	</tr>

<?php
		$qr="SELECT thua_dat_id, st_distance(A.geom,B.geom)
			from thua_dat A, dia_danh B
			where dia_diem='$dia_diem' and st_distance(A.geom,B.geom)>$kc";

		$run=pg_query($qr);

		if (pg_numrows($run)>0) 
		{
			$stt=1;
			while ($arr=pg_fetch_array($run)) 
			{
				echo "<tr>";
					echo "<td>$stt</td>";
					echo "<td>$arr[0]</td>";
					$lam_tron=round($arr[1],1);
					echo "<td> $lam_tron m</td>";								
				echo "</tr>";
				$stt=$stt+1;

			}
		}

		else{
				echo '<script language="javascript">';
				  echo 'alert("no data")'; 
				  echo '</script>';
			}

		}
	}

 ?>

 </table>
