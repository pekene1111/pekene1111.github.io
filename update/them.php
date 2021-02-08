<!DOCTYPE html>
<html>
<head>
	<title>Thêm</title>
	
	
</head>


<body>

	<form action="" method="POST" id="form_add">
		
		<span class="span">Nhập CMND: </span>
		<input class="input_style" type="text" name="cmnd" placeholder="Nhập số CMND người sử dụng" maxlength="15" minlength="10" value="<?php if(isset($_POST["xac_nhan"])) {echo trim($_POST["cmnd"]);} ?>">
		
			<br><br>

		<span class="span">Nhập họ tên: </span>
		<input class="input_style" type="text" name="ho_ten" placeholder="Nhập họ và tên chủ sử dụng" 
		value="<?php if(isset($_POST["xac_nhan"])) {echo trim($_POST["ho_ten"]);} ?>">
			
			<br><br>
		<span class="span">Nhập năm sinh: </span>
		<input class="input_style" type="number" name="nam_sinh" placeholder="Nhập năm sinh người sử dụng"
		value="<?php if(isset($_POST["xac_nhan"])) {echo trim($_POST["nam_sinh"]);} ?>">
			
			<br><br>

		<span class="span">Nhập giới tính: </span>
		<input class="input_style" type="text" name="gioi_tinh" placeholder="Nhập giới tính chủ sử dụng"
		value="<?php if(isset($_POST["xac_nhan"])) {echo trim($_POST["gioi_tinh"]);} ?>">

			<br><br>

		<span class="span">Nhập địa chỉ: </span>
		<input class="input_style" type="text" name="dia_chi" placeholder="Nhập địa chỉ người sử dụng"
		value="<?php if(isset($_POST["xac_nhan"])) {echo trim($_POST["dia_chi"]);} ?>">
			
			<br><br>
		<input id="xac_nhan" type="submit" name="xac_nhan" value="Thêm dữ liệu vào CSDL">
		<br><br>

	</form>

<?php 
	
	if (isset($_POST["xac_nhan"])) 
	{
		$cmnd=$_POST["cmnd"];
		$hoten=$_POST["ho_ten"];
		$namsinh=$_POST["nam_sinh"];
		$gioitinh=$_POST["gioi_tinh"];
		$diachi=$_POST["dia_chi"];
		

		if (empty($_POST["cmnd"])==TRUE) 
			{
				echo "<div class='thong_bao'>Chưa nhập số CMND</div>";
			}
		
		elseif(empty($_POST["ho_ten"])==TRUE) 
			{
				echo "<div class='thong_bao'>Chưa nhập họ tên</div>";
			}

		elseif (empty($_POST["nam_sinh"])==TRUE) 
			{
				echo "<div class='thong_bao'>Chưa nhập năm sinh</div>";
			}
	
		elseif (empty($_POST["gioi_tinh"])==TRUE) 
			{
				echo "<div class='thong_bao'>Chưa nhập giới tính</div>";
			}

		elseif (empty($_POST["dia_chi"])==TRUE) 
			{
				echo "<div class='thong_bao'>Chưa nhập địa chỉ</div>";
			}
				
		else
			{

				$connect="host=localhost port=5432 dbname=bai_giua_ki user=postgres password=daikamy0";
				$db_connection=pg_connect($connect) or die("không kết nối được");
				
				$caulenh = "INSERT INTO NGUOI_SU_DUNG_dat VALUES('$cmnd','$hoten',$namsinh,'$gioitinh','$diachi')";
				pg_query($caulenh) or die("lỗi câu truy vấn");
				echo "<br>";
				if($caulenh==true)
					{echo "Thêm thành công";}
			}
						
			
	}	
				
?>






	

<style>
	.span{
	width: 125px;
	display: block;
	float: left;
	height: 30px;
	line-height: 32px;
	font-weight: bold;
	
}

#form_add{
	margin-right:25%;
	margin-left: 25%;
	margin-top: 100px;
	border: 1px solid black;
	padding: 3px;
}

.input_style{
	width: 250px;
	height: 30px;	
	line-height: 30px;
	
	margin-bottom: -10px;
	border: 1px solid blue;
	padding-left: 3px;
	font-style: italic;
	border-radius: 3px;
	
}

#xac_nhan{
	width: 180px;
	color: red;
	margin-left: 157px;
	height: 40px;
	font-size: 15px;
	font-style: italic;
	color: white;
	background-color: #008284;
	border: 0px solid;
}

#tieu_de th {
	color: white;
	background-color: #008284;
	width: 100px;
}

#table td {
	text-align: center;
	
}



#table_2 caption{
	color: purple;
	font-size: 30px;
	font-weight: bold;

}


#table_2
{
	width:100%;
	margin-top: 74px;
	
	padding: 4px 4px 4px 4px;
	
}

#table_2 th{
	color: white;
	width:auto;
	background-color: #01BDCA;
	padding: 4px 4px 4px 4px;
	

	
}

#table_2 td{
	text-align: center;
	font-size: 17px;
	padding: 4px 4px 4px 4px;
}

#xac_nhan{
	background-color: #01BDCA;
	border-radius: 4px;
	color: white;
	width: 220px;
	height: 40px;
	font-weight: bold;
	font-size: 18px;
	float: left;
	margin-bottom: 30px;
	margin-left:139px;
	
}

.thong_bao{

	color: red;
	background-color: yellow;	
	width:200px;
	font-weight: bold;
	font-style: italic;
	text-align: center;
	height:40px;
	line-height: 40px;
	margin-left:390px;
	margin-top:-37px;

}

#thanh_cong{

	
	
	width: 340px;
	color: red;
	line-height: 38px;
	background-color: yellow;	

	
	font-weight: bold;
	font-style: italic;
}

#end{
	color: yellow;
	background-color: #01BDCA;
	padding: 4px 4px 4px 4px;
	font-weight: bold;
	font-style: italic;
}



#empty_data
{

	display: block;
	border: 1px solid gray ;
	width: 240px;
	height: 30px;
	line-height: 30px;
	margin-top: 75px;
	margin-left:127px;
	text-align: center;
	background-color: #9966ff;
	color: yellow;
	font-style: italic;
	font-weight: bold;
	font-size: 20px;
	
}
</style>


</body>
</html>