<?php
include('connect.php');
if(!isset($_SESSION)){
	session_start();
}else{
	session_destroy();
	session_start();
}
    if(isset($_POST["dangnhap"])){
	    if($_POST["taikhoan"]=="" || $_POST["matkhau"]==""){
			$thongbao="<center>Nhập thông tin đầy đủ trước khi đăng nhập!</center>";
		}else{
			$user=$_POST["taikhoan"];// Lấy thông tin tài khoản người dùng nhập vào
			$pass=$_POST["matkhau"];// Lấy thông tin mật khẩu người dùng nhập vào 
            // Kiểm tra thông tin người dùng vừa nhập có trong bản uses hay không?
			$sql="SELECT * from users where username='$user' && password ='$pass'";
			$query=mysqli_query($connect,$sql);// Thực hiện truy vấn với CSDL
            $result= mysqli_num_rows($query);// Lấy số dòng của kết quả truy vấn vừa tìm được
			if($result!=1){
				$thongbao="<center>User không tồn tại</center>";
			}else{
				$_SESSION['login']=$user;//Gán session hiện tại là người dùng vừa đăng nhập
				header('location: index.php');
			}
		}
    }else{
	    $thongbao="";
    }


?>







    <style>
                .form-tt {
                width: 400px;
                height: 350px;
                border-radius: 10px;
                overflow: hidden;
                padding: 10px;
                margin-top: 40px;
                margin-left: 250px;
                background: #9152f8;
                background: -webkit-linear-gradient(top,#7579ff,#b224ef);
                background: -o-linear-gradient(top,#7579ff,#b224ef);
                background: -moz-linear-gradient(top,#7579ff,#b224ef);
                background: linear-gradient(top,#7579ff,#b224ef);
                }
                .form-tt h2 {
                font-size: 30px;
                color: #fff;
                line-height: 1.2;
                text-align: center;
                text-transform: uppercase;
                display: block;
                margin-bottom: 30px;
                }

                .form-tt input[type=text], .form-tt input[type=password] {
                font-family: Poppins-Regular;
                font-size: 16px;
                color: #fff;
                line-height: 1.2;
                display: block;
                width: calc(100% - 10px);
                height: 45px;
                background: 0 0;
                padding: 10px 0;
                border-bottom: 2px solid rgba(255,255,255,.24)!important;
                border: 0;
                outline: 0;
                }
                .form-tt input[type=text]::focus, .form-tt input[type=password]::focus {
                color: red;
                }
                .form-tt input[type=password] {
                margin-bottom: 20px;
                }
                .form-tt input::placeholder {
                color: #fff;
                }
                .checkbox {
                display: block;
                }
                .form-tt input[type=submit] {
                font-size: 16px;
                color: #555;
                line-height: 1.2;
                padding: 0 20px;
                min-width: 120px;
                height: 50px;
                border-radius: 25px;
                background: aqua;
                position: relative;
                z-index: 1;
                border: 0;
                outline: 0;
                display: block;
                margin: 30px auto;
                width: 150px;
                }
                #checkbox {
                display: inline-block;
                margin-right: 10px;
                }
                .checkbox-text {
                color: #fff;
                }
                .psw-text {
                color: #fff;
                }

    </style>
    <div class="form-tt">
        <h2>Đăng nhập</h2>
        <form action="" method="post" name="dangnhap">
        
        <input type="text" name="taikhoan" placeholder="Tên đăng nhập" />
        <input type="password" name="matkhau" placeholder=" Mật khẩu" />
        <input type="submit" name="dangnhap" value="Đăng nhập" />
        <?php echo $thongbao?>
        </form>
        
    </div>