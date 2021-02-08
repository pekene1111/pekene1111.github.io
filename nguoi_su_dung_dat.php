<?php 
	include('connect.php');
 ?>

<style>
	#table1{
		height: 30px;
		width: auto;
		padding: 0;
		margin: 0;
		border-collapse: collapse;
		color: white;
		background-color: #32a889;
		margin-top: 50px;
		text-align: center;
		font-family: Arial;
	}

	


#div_a{
		height: 30px;
		width: 102px;
	}

#div_b{
		height: 30px;
		width: 296px;
	}

#div_c{
		height: 30px;
		width: 208px;
	}

#div_d{
		height: 30px;
		width: 135px;
	}

#div_e{
		height: 30px;
		width: 126px;
	}

#div_f{
		height: 30px;
		width: 446.5px;
	}


#td_1{
		height: 30px;
		width: 20px;
	}

#td_2{
		height: 30px;
		width: 20px;
	}

#td_3{
		height: 30px;
		width: 20px;
	}

#td_4{
		height: 30px;
		width: 20px;
	}

#td_5{
		height: 30px;
		width: 20px;
	}

#td_6{
		height: 30px;
		width: 20px;
	}





	#div_table{
		height: 500px;
		width: 100%;
		padding: 0;
		
		overflow: auto;
		overflow-x: hidden;
		
   		

	}


	#table2{
		text-align: center;
		font-family: tahoma;
		font-size: 15px;
		width: 100%;
		color: black;
		border-collapse: collapse;
		padding: 2px;

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
		$qr="SELECT ca_nhan_id, ho_ten,nam_sinh, gioi_tinh, dia_chi from nguoi_su_dung_dat";

		$run=pg_query($qr);

		if (pg_numrows($run)>0) 
		{
			

			
			echo "<div id='div1'>";
			echo "<table border=1px id='table1'>
				<caption id='caption'>THÔNG TIN VỀ NGƯỜI SỬ DỤNG</caption>	
					<tr>
						<th id='div_a'>STT</th>
						<th id='div_b'>Số CMND</th>
						<th id='div_c'>Họ tên</th>
						<th id='div_d'>Năm sinh</th>
						<th id='div_e'>Giới tính</th>
						<th id='div_f'>Địa chỉ</th>
					</tr>";
			echo "</table>";
			echo "</div>";				




			echo "<div id='div_table'>";
				$stt=1;
			echo "<table border=1px id='table2'>";
			while ($arr=pg_fetch_array($run)) 
			{
				echo "<tbody id='table_td'>
					  <tr>
						 <td id='td_1'>$stt</td>
						 <td id='td_2'>$arr[0]</td>
						 <td id='td_3'>$arr[1]</td>
						 <td id='td_4'>$arr[2]</td>
						 <td id='td_5'>$arr[3]</td>
						 <td id='td_6'>$arr[4]</td>
				 	  </tr>
				 </tbody>";
				$stt=$stt+1;
			}
			echo "</table>";
			echo "</div>";
		}

 ?>

 </div>
 
