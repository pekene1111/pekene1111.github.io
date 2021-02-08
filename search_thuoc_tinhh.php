


<?php 
	
	if (isset($_POST["xac_nhan_tt"])) 
	{
		$ca_nhan_id=$_POST["cmnd"];
		$gcn=$_POST["gcn"];
		$so_to=$_POST["so_to"];


		if ($ca_nhan_id=="") 
			{
				  echo '<script language="javascript">';
				  echo 'alert("Chưa nhập số cmnd")'; 
				  echo '</script>';
			}

		elseif ($gcn=="") 
			{
				  echo '<script language="javascript">';
				  echo 'alert("Chưa nhập số GCN")'; 
				  echo '</script>';
			}

		elseif ($so_to=="") 
			{
				  echo '<script language="javascript">';
				  echo 'alert("Chưa nhập số tờ")'; 
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
		<th>Họ tên</th>
		<th>Số CMND</th>
		<th>Số GCN</th>
		<th>Số tờ </th>
		<th>Số thửa</th>
		<th>Diện tích</th>
		<th>Mục đích sử dụng</th>
	</tr>

<?php
		$qr="SELECT thua_dat.thua_dat_id,ho_ten,nguoi_su_dung_dat.ca_nhan_id,so_phat_hanh,sh_ban_do,sh_thua,dien_tich,mdsd
			FROM thua_dat,nguoi_su_dung_dat,gcn,cap
			WHERE nguoi_su_dung_dat.ca_nhan_id=$ca_nhan_id and nguoi_su_dung_dat.ca_nhan_id=gcn.ca_nhan_id
			and gcn.so_phat_hanh = '$gcn'
			and sh_ban_do=$so_to
			and thua_dat.thua_dat_id=gcn.thua_dat_id
			and thua_dat.thua_dat_id=cap.thua_dat_id
			and nguoi_su_dung_dat.ca_nhan_id=cap.ca_nhan_id ";

		$run=pg_query($qr);

		if (pg_numrows($run)>0) 
		{
			$stt=1;
			while ($arr=pg_fetch_array($run)) 
			{
				echo "<tr>";
					echo "<td>$stt</td>";
					echo "<td>$arr[0]</td>";
					echo "<td>$arr[1]</td>";
					echo "<td>$arr[2]</td>";
					echo "<td>$arr[3]</td>";
					echo "<td>$arr[4]</td>";
					echo "<td>$arr[5]</td>";
					echo "<td>$arr[6] m<sup>2</sup></td>";
					echo "<td>$arr[7]</td>";
				echo "</tr>";
				$stt=$stt+1;

			}
		}

		}
	}

 ?>

 </table>
