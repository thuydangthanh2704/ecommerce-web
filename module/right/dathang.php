<div class="title"><h3>Đặt hàng</h3></div>
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
}

.button:hover {background-color: #3e8e41}
</style>
<?php
if(isset($_SESSION['login']) && isset($_SESSION['giohang'])){
if(isset($_POST['btdathang'])){
	$hoten=$_POST['hoten'];
	$Sdt=$_POST['sdt'];
	$diachi=$_POST['diachi'];
	if($hoten==""||$Sdt==""||$diachi==""){
		$thongbao="Nhập Đầy Đủ Thông Tin";
	}else{
		if(!is_numeric($Sdt)){
			$thongbao="SDT Không Được Chứa Ký Tự";
		}else{
			//them gio hang
			$username=$_SESSION['login'];
			$sql_giohang="insert into giohang (username,hoten,sdt,diachi) VALUES('{$username}','{$hoten}','{$Sdt}','{$diachi}')";
			$query_giohang=mysqli_query($connect,$sql_giohang);
			//them chitietgiohang
			$dem=count($_SESSION['giohang']);
			for($i=0;$i<$dem;$i++){
				$sql_sanpham="select*from chitietsanpham where id_sanpham='{$_SESSION['giohang'][$i]['id']}'";
				$query_sanpham=mysqli_query($connect,$sql_sanpham);
				$row_sanpham=mysqli_fetch_assoc($query_sanpham);
				$masp=$row_sanpham['id_sanpham'];
				$gia=$row_sanpham['gia_sanpham'];
				$sql_chitietgiohang="insert into chitietgiohang (id_giohang,id_sanpham,soluong_sanpham,gia_sanpham) 	VALUES('{$idgiohang}','{$masp}','{$_SESSION['giohang'][$i]['soluong']}','{$gia}')";
				$query_chitietgiohang=mysqli_query($connect,$sql_chitietgiohang);
			}
			$thongbao="Dat hang thanh cong";
			unset($_SESSION['giohang']);
			$_SESSION['tongtien']=0;
		}
	}
}else{
	$thongbao="Bạn cần đăng ký tài khoản trước khi mua hàng! Cảm ơn!";
}
?><form action="?xem=dathang" method="POST"><table width="100%" border="1">
  <tr>
    <th colspan="2" align="center">Thông tin thanh toán</th>
  </tr>
  <tr>
    <td width="22%">Họ và tên</td>
    <td><input placeholder="Họ và tên" type="text" name="hoten" size="88" /></td>
  </tr>
  <tr>
    <td>Số điện thoại</td>
    <td><input placeholder="Số điện thoại" type="text" name="sdt" size="88" /></td>
  </tr>
  <tr>
    <td height="200">Địa chỉ</td>
    <td><textarea name="diachi" cols="90" rows="11" placeholder="Địa chỉ"></textarea></td>
  </tr>
  <tr>
    <td height="23">Tổng tiền</td>
    <td><?php echo number_format($_SESSION['tongtien'],0,",",".");?>VNĐ</td>
  </tr>
  <tr>
    <td height="23" colspan="2"><?php echo $thongbao;?></td>
  </tr>
  <tr>
    <td align="center" height="50" colspan="2"><input type="submit" class="button" name="btdathang" value="Đặt Hàng"></td>
  </tr>
</table></form>
<?php
}else{
  echo "Bạn cần đăng ký tài khoản trước khi mua hàng! Cảm ơn!";  
}
?>