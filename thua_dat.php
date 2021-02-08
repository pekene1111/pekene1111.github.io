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
		margin-left: 186px;
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
		width: 1017px;
		padding: 0;
		
		overflow: auto;
		overflow-x: hidden;
		margin-left: 186px;
   		

	}


	#table2{
		text-align: center;
		font-family: tahoma;
		font-size: 15px;
		width: 979px;
		color: black;
		border-collapse: collapse;
	}





#div_be a{
	display: block;

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
	float: left;
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
 	<a href="gcn.php">Xem về Giấy chứng nhận </a>
 	</div>

<!--================================================= -->

	<div  class="fl">
 	<a href="nguoi_su_dung_dat.php">Tra xem người sử dụng đất</a>
 	</div>
<br>
<div id="div_to">
<?php
		$qr="SELECT thua_dat_id,sh_ban_do,sh_thua,ma_xa,dien_tich from thua_dat";

		$run=pg_query($qr);

		if (pg_numrows($run)>0) 
		{
			

			
			echo "<div id='div1'>";
			echo "<table border=1px id='table1'>
				<caption id='caption'>THÔNG TIN VỀ THỬA ĐẨT</caption>
					<tr>
						<th>STT</th>
						<th>ID thửa đất</th>
						<th>Số hiệu bản đồ</th>
						<th>Số hiệu thửa</th>
						<th>Mã xã</th>
						<th>Diện tích</th>
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
						 <td>$arr[4] m<sup>2</sup></td>
				 	  </tr>
				 </tbody>";
				$stt=$stt+1;
			}
			echo "</table>";
			echo "</div>";
		}

 ?>

 </div>



 
 
