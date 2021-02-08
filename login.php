<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
	
	<?php include 'connect.php'; ?>
<link rel="stylesheet" type="text/css" href="css/style_login.css">





<body>
<form action="" method="POST" id="form">
		
		<fieldset id="khung">	
			<span id="span">LOGIN NOW</span>
			<input type="text" placeholder="Nhập vào tên đăng nhập..." name="txtName" id="input_1" value="<?php if(isset($_POST["login"])) {echo trim($_POST["txtName"]);} ?>"><br><br>
			
			
			<input placeholder="Nhập vào mật khẩu..." type="password" name="pass" id="input_2">
			<input id="xac_nhan" type="submit" name="login" value="Đăng nhập">
			
		</fieldset>
		

</form>

	



<?php 
		if (isset($_POST['login']))
		{
				$name=$_POST['txtName'];
				$pass=$_POST['pass'];
			
			$qr="SELECT tk,mk,loai from tai_khoan ";
			$run=pg_query($qr);
			$number=pg_numrows($run);
			
	//===============================================================================================================================
	

			if ($name=="") 
				{
					echo '<script language="javascript">';
				    echo 'alert("Chưa nhập tài khoăn !")'; 
				    echo '</script>';
				}		
			elseif ($pass=="") 
			    {
				  echo '<script language="javascript">';
				  echo 'alert("Chưa nhập mật khẩu")'; 
				  echo '</script>';
			    }
 
		    else
		    	{
		    		while($number>0) 
					{
				
						while ($arr=pg_fetch_array($run)) 
							{

								 if(in_array($name,$arr)==TRUE && in_array($pass,$arr)==true)
								 {
								 	$type=$arr[2];
								 	
								 	echo "<div id='login'>Tài khoản ".$arr[2]."<a href='body.php'> <span>TIẾP TỤC</span></a></div>";
								 	exit();
								 }

								 elseif($number==1)
								 {
								 	echo "<div id='login'>Tên đăng nhập hoặc mật khẩu sai</div>";
								 	break;
								 }
							 $number--;
							}

				         $number--;
			        }
		    	}	
		
		}
		

 ?>
		
</body>
</html>