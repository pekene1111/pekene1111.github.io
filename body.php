<!DOCTYPE html>
<html>
<head>
    <title>mennu</title>
   <link rel="stylesheet" type="text/css" href="css/styleeee.css">
   
</head>

<body>

<!--===============================================================================================================================================-->
<!--===============================================================================================================================================-->
<!--===============================================================================================================================================-->
     

       <div id="menu">
            <ul class="root">
                <li><a href="">Trang chủ</a></li>

                <li><a href="">Quy hoạch</a></li>
                
                <li><a href="">Cập nhật dữ liệu </a>
                    <ul class="sub_menu">
                        <li><a href="update/them.php">Thêm</a></li>
                        <li><a href="update/sua.php">Sửa</a></li>
                        <li><a href="update/xoa.php">Xóa</a></li>  
                    </ul>
                </li>
                
                <li><a href="">Thống kê</a>
                    <ul class="sub_menu">
                        <li><a href="thua_dat.php">Thửa đất</a></li>
                        <li><a href="gcn.php">Giấy chứng nhận</a></li>
                        <li><a href="nguoi_su_dung_dat.php">Người sử dụng</a></li>  
                    </ul>

                </li>
                
                <li><a href="">Kiểm kê</a></li>
                <li><a href="">Liên hệ</a></li>
                <li><a href="login.php">Đăng nhập</a></li>
            </ul>
        </div>


<!--===============================================================================================================================================-->
<!--===============================================================================================================================================-->
<!--===============================================================================================================================================-->



<div id="main_1">
    <form action="" method="POST">
    <label class="caption">TRA CỨU THUỘC TÍNH</label>
    <fieldset style="border: 2px solid ;">
       <legend id="a" >Tra cứu thuộc tính</legend>
        
        <span class="span">Nhập CMND: </span>
            <input class="input_style" type="number" name="cmnd" placeholder="Nhập số CMND ở đây..." value="<?php if(isset($_POST["xac_nhan_tt"])) {echo trim($_POST["cmnd"]);} ?>">
        </span>

        <br><br>
        
        <span class="span">Nhập số GCN: </span>
            <input class="input_style" type="text" name="gcn" placeholder="Nhập số GCN ở đây..." value="<?php if(isset($_POST["xac_nhan_tt"])) {echo trim($_POST["gcn"]);} ?>">
        

        <br><br>
          
        <span class="span">Nhâp số tờ: </span>
            <input class="input_style" type="number" name="so_to" placeholder="Nhập số tờ/thửa ở đây..." value="<?php if(isset($_POST["xac_nhan_tt"])) {echo trim($_POST["so_to"]);} ?>">
        

        <br><br>

          
            <input id="xac_nhan" type="submit" name="xac_nhan_tt" value="Xác nhận">
          
        <br>

    </fieldset>
    </form>

</div>

<!--===============================================================================================================================================-->
<!--===============================================================================================================================================-->
<!--===============================================================================================================================================-->




<div id="main_2">
    <form action="" method="POST">
    <label class="caption">TRA CỨU KHÔNG GIAN</label>
    <fieldset  style="border: 2px solid black;">
       <legend id="a" > Tra cứu khong gian </legend>
             <span class="span">Khoảng cách: </span>
            <input class="input_style" type="number" name="khoang_cach" placeholder="Nhập khoảng cách tối thiểu đến địa điểm..."
             value="<?php if(isset($_POST["xac_nhan_kg"])) {echo trim($_POST["khoang_cach"]);} ?>">
            
            <br><br>

            <select name="place">
                    <optgroup label="Trường">
                    <option value="Trường tiểu học  A">Trường tiểu học  A</option>
                    <option value="Trường tiểu học  B">Trường tiểu học  B</option> 
                    <option value="Trường tiểu học  C">Trường tiểu học  C</option>
                    <option value="Trường tiểu học  D">Trường tiểu học  D</option>
                    <option value="Trường tiểu học  E">Trường tiểu học  E</option>
                    <option value="Trường tiểu học  F">Trường tiểu học  F</option>
                    <option value="Trường tiểu học  G">Trường tiểu học  G</option>
                    </optgroup>

            </select>

        <br><br>

          
            <input id="xac_nhan" type="submit" name="xac_nhan_kg" value="Xác nhận">
          
        <br>

    </fieldset>
   

    </form>
    

</div>


   
<!--===============================================================================================================================================-->
<!--===============================================================================================================================================-->
<!--===============================================================================================================================================-->

   <?php 
        include("connect.php");
        include("search_thuoc_tinhh.php");
        include("search_kg/tinh_kc.php")
        
    ?> 






</body>
</html>
