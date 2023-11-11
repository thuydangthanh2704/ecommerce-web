<div class="title"><h3>Chi Tiết Giỏ Hàng</h3></div>
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #666666;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  height:50px;
  width: 380px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 10px 7px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<?php
if(isset($_GET['ac'])){
	$id=$_GET['id'];
	$ac=$_GET['ac'];
	$dem=count($_SESSION['giohang']);
	if($ac=='tru'){
		for($i=0;$i<$dem;$i++){
					if($_SESSION['giohang'][$i]['id']==$id){
					$_SESSION['giohang'][$i]['soluong']--;
					break;
				}
			}
	}elseif($ac=='xoa'){
		for($i=0;$i<$dem;$i++){
					if($_SESSION['giohang'][$i]['id']==$id){
					$_SESSION['giohang'][$i]['id']=0;
					$_SESSION['giohang'][$i]['soluong']=0;
					break;
				}
			}
	}
	header("location: ./?xem=giohang");
	//kiểm tra xem có id không
}else if(!isset($_GET['ac']) && isset($_GET['id']) && !empty($_GET['id'])){
	$id=$_GET['id'];
	
	if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])){
		$count=count($_SESSION['giohang']);
		$check=false;
		for($i=0;$i<$count;$i++){
			if($_SESSION['giohang'][$i]['id']==$id){
				$_SESSION['giohang'][$i]['soluong']+=1;
				$check=true;
				break;
			}
		}
		//nếu session đã tồn tại nhưng không có $id thì gán cho session vào dòng cuối = $dem
		if($check==false){
		$_SESSION['giohang'][$count]['id'] = $id;
		$_SESSION['giohang'][$count]['soluong']=1;
		}
	}else{
		$_SESSION['giohang']=array();
		$_SESSION['giohang'][0]['id']=$id;
		$_SESSION['giohang'][0]['soluong']=1;
	}
	header("location: ./?xem=giohang");
}elseif(isset($_SESSION['giohang']) && is_array($_SESSION['giohang']) && !isset($_GET['ac'])){
	$count=count($_SESSION['giohang']);
	?>
		<table id="tb01" width="100%">
		<?php
		$_SESSION['tongtien']=0;
		for($i=0;$i<$count;$i++){
				$sql="select*from chitietsanpham where id_sanpham='{$_SESSION['giohang'][$i]['id']}'";
				$query_sql=mysqli_query($conn,$sql);
				$row_sanpham=mysqli_fetch_assoc($query_sql);
				$thanhtien=$row_sanpham['gia_sanpham']*$_SESSION['giohang'][$i]['soluong'];
				if($_SESSION['giohang'][$i]['id'] >0 && $_SESSION['giohang'][$i]['soluong']>0){
				?>
					  <tr>
						<td height="30"><div class="tb"><b>Sản phẩm :</b><div class="tb01"><font size="3" style="font-family:Courier New;"><?php echo $row_sanpham['ten_sanpham'];?></font></div></div></td>
						<td height="30" width="120"><div class="tb"><b>Giá</b><div class="tb01"><?php echo number_format($row_sanpham['gia_sanpham'],0,",",".");?> VNĐ</div></div></td>
						<td height="30" width="120"><div class="tb"><b>Số lượng :</b> <div class="tb01"><input type="text" disabled size="1" value="<?php echo $_SESSION['giohang'][$i]['soluong'];?>"/><a href="?xem=giohang&id=<?php echo $row_sanpham['id_sanpham'];?>"><button style="width:25px;">+</button></a><a href="?xem=giohang&ac=tru&id=<?php echo $row_sanpham['id_sanpham'];?>"><button style="width:25px;">-</button></a><a href="?xem=giohang&ac=xoa&id=<?php echo $row_sanpham['id_sanpham'];?>"><button style="width:25px;">Xóa</button></a></div></div></td>
						<td height="30" width="150"><div class="tb"><b>Thành tiền</b><div class="tb01"><b><?php echo number_format($thanhtien,0,",",".");?>VNĐ</div></div></td>
					  </tr>
						<?php
						$_SESSION['tongtien']=$_SESSION['tongtien']+$thanhtien;
				}
		}
				?>
		</table>
		<table id="tb02" width="50%" align="left">
		<tr>
			<th>
			<div class="tb">Tổng Cộng : <div class="tb01"><b><font size="5"><?php echo number_format($_SESSION['tongtien'],0,",",".");?>VNĐ</font></div></div>
			</th>
		</tr>
		</table>
		<?php
		if($_SESSION['tongtien']>0){
		?>

		<a href="?xem=dathang"><button class="button" style="vertical-align:middle"><span> Đặt Hàng </span></button></a>
		<?php
		}else{
				?>
				<p style="margin:35px 40px;"> Giỏ Hàng Rỗng </p>
				<?php
			}
	}else{
		echo "GIỎ HÀNG RỖNG";
	}
?>