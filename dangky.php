
<?php
	include('connect.php');
		if(isset($_POST["btdangky"]))
		{
			if($_POST["user"]=="" || $_POST["pass"]=="" || $_POST["email"]==""){
				$thongbao="<center>Cần nhập đầy đủ thông tin trước khi đăng ký!</center>";
			}else{
				$user=$_POST["user"];
				$pass=$_POST["pass"];
				$email=$_POST["email"];
				$sql="SELECT * from users where username='$user'";
				$query=mysqli_query($connect,$sql);
                $result= mysqli_num_rows($query)>0;
				if($result>0){
					//Kiem tra email
					$thongbao="<center>Username hoặc Email<br> đã tồn tại</center>";
				}else{
					//Save database
					$sql="INSERT INTO users (username,password,email) value ('$user','$pass','$email')";
					mysqli_query($connect,$sql);
					$thongbao="Đăng Ký Thành Công";
				}
			}
		}
        else{
            $thongbao="";
        }
?>
<style>
                .form-tt {
                width: 450px;
                height: 450px;
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

    </style>
    <div class="form-tt">
        <h2>Đăng ký</h2>
        <form action="index.php?xem=dangky" method="post" name="dangky">
        <input type="text" name="user" placeholder="Tên đăng nhập" />
        <input type="password" name="pass" placeholder=" Mật khẩu" />
        <input type="text" name="email" placeholder="Email" />
		<input type="submit" name="btdangky" Value="Đăng Ký"/>
		<?php echo $thongbao?>
        </form>
	</div>