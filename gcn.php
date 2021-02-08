<?php 
	include('connect.php');
 ?>

<style>
	{
		height: 30px;
		width: 583px;
		padding: 0;
		margin: 0;
		
		background-color: red;
	}


	#table1{
		margin-top: 50px;
		text-align: center;
		font-family: Arial;
		font-size: 15px;
		color: black;
		margin-left: 110px;
		border-collapse: collapse;
	

	}

	#table1 th{
		width: 160px;
		background-color: #32a889;
    	color: white;
   		font-weight: bold;
   	    border: 1px solid black;
   	    height: 30px;
   	    font-size: 18px;
	}


	#table2 td{
		width: 100px;
	}



	#div2{
		height: 400px;
		width: 1160px;
		padding: 0;
		
		overflow: auto;
		overflow-x: auto;
		margin-left: 110px;
   		

	}


	#table2{
		text-align: center;
		font-family: tahoma;
		font-size: 15px;
		width: 1142px;
		color: black;
		border-collapse: collapse;
	}





#div_be a{
	display: block;
	float: left;
	text-decoration: none;
	border: 1px solid gray;
	height: 20px;
	width: 115px;
	font-weight: bold;
	padding: 5px;
	margin-left: 10px;
	margin-top: 15px;
	color: #ccffff;
	background-color: #993399;

}

.fl a{
	
	float: left;
	display: block;
	border: 1px solid gray;
	height: 20px;
	width: 200px;
	font-weight: bold;
	padding: 5px;
	margin-left: 10px;
	margin-top: 15px;
	color:  #ccffff;
	background-color: #993399;
	text-decoration: none;
	text-align: center;
}

#div_to caption{
	margin-top: 20px;
	margin-bottom: 20px;
	color: red;
	font-size: 20px;
}



</style>


	<div id="div_be">
 	<a href="body.php">Trở về trang chủ</a>
 	</div>
<!--================================================= -->
	<div   class="fl">
 	<a href="thua_dat.php">Xem thông tin thửa đất </a>
 	</div>

<!--================================================= -->

	<div  class="fl">
 	<a href="nguoi_su_dung_dat.php">Tra xem người sử dụng đất</a>
 	</div>
<br>



<div id="div_to">
<?php
		$qr="SELECT so_phat_hanh,mdsd,ngay_cap,thoi_han,thua_dat_id,ca_nhan_id from gcn";

		$run=pg_query($qr);

		if (pg_numrows($run)>0) 
		{
			

			
			echo "<div id='div1'>";
			echo "<table border=1px id='table1'>
					<caption id='caption'>THÔNG TIN VỀ GIẤY CHỨNG NHẬN</caption>
					<tr>
						<th>STT</th>
						<th>Số phát hành</th>
						<th>Mục đích sử dụng</th>
						<th>Ngày cấp</th>
						<th>Thời hạn</th>
						<th>ID thửa đất</th>
						<th>Số CMND</th>
					</tr>";
			echo "</table>";
			echo "</div>";				




			echo "<div id='div2'>";
				$stt=1;
			echo "<table border=1px id='table2'>";
			while ($arr=pg_fetch_array($run)) 
			{
				echo "<tbody div id='table_td'>
					  <tr>
						 <td>$stt</td>
						 <td>$arr[0]</td>
						 <td>$arr[1]</td>
						 <td>$arr[2]</td>
						 <td>$arr[3]</td>
						 <td>$arr[4]</td>
						 <td>$arr[5]</td>
				 	  </tr>
				 </tbody>";
				$stt=$stt+1;
			}
			echo "</table>";
			echo "</div>";
		}

 ?>

 </div>



 
 
