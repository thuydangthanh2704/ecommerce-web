<?php
	include('modules/ttcsdl.php');
  include('modules/header.php');
	if(!isset($_SESSION)){
    session_start();
  }else{
    session_destroy();
    session_start();
  }
  if(isset($_SESSION['username'])){
    header('location: login.php');
    $thongbao="";
  }else{
	if(isset($_POST['login'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$sql="select * from users where username='$user' and password='$pass' and quyen='admin' limit 1";
		$query=$conn->query($sql);
		$nums=$query->num_rows;
		if($nums>0){
			$_SESSION['login']=$user;
			header('location:adminpage.php');
		}else{
			$thongbao="<center>User không tồn tại</center>";
		}
	}
else{
	$thongbao="";
}
}
?>
<div class="form-tt">
<form action="" method="post">
    <center><table width="200" border="0">
    <h2>Đăng nhập</h2>
      <tr>
        <td><div align="right">Username:</div></td>
        <td><input type="text" name="user" id="user"></td>
      </tr>
      <tr>
        <td><div align="right">Password</div></td>
        <td><input type="password" name="pass" id="pass"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="login" id="login" value="Login">
        </div></td>
      </tr>
    </table></center>
    <?php echo $thongbao?>
</form>
</div>

    <style>
                .form-tt {
                width: 400px;
                height: 350px;
                border-radius: 10px;
                overflow: hidden;
                padding: 10px;
                margin-top: 40px;
                margin-left: 520px;
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