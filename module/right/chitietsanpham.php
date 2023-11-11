<div class="title"><h3>Chi Tiết Sản Phẩm</h3></div>
   <style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #008b8b;
  border: none;
  color: #FFF;
  text-align: center;
  font-size: 28px;
  height:80px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
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
<div id="chitietsanpham" style="position:relative;">
	<?php 
	if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
	}else{
		$trang=1;
	}
	$id=$_GET['id'];
	$sosangpham1trang=8;
	$phantrang=($trang*$sosangpham1trang)-$sosangpham1trang;
	$sql="select*from chitietsanpham where id_sanpham='$id' limit $phantrang,$sosangpham1trang";
	$query_sql=mysqli_query($conn,$sql);
	$row_sql=mysqli_fetch_array($query_sql)
	?>
	<table border="0" align="left">
	<tr>
	<td rowspan="2" width="350" align="right"><img src="./img/<?php echo $row_sql['hinhanh_sanpham'];?>" width="300" height="350"/></td>
	<td align="center" width="500" height="150" ><font size="6" style="font-family:Courier New;"><b><?php echo $row_sql['ten_sanpham'];?></font></b><br>
	<font color="red" size="6" style="font-family:Impact;"><b><?php echo number_format($row_sql['gia_sanpham'],'0',',','.');?> VND</b></font></br>
	Khuyến mãi : <font color="red" size="6"><b><?php echo $row_sql['khuyenmai'];?></b></font> %</td>
	</tr>
	<td width="500" align="center"><a href="?xem=giohang&id=<?php echo $row_sql['id_sanpham'];?>"><button class="button" style="vertical-align:middle"><img src="img/giohang.png" width="40"><span> Thêm vào Giỏ </span></button></a></td>
	</tr>
	</table>
	<div id="baomota">
		<div id="titlemota" style="background-color: #FFF;color:white;">
				<b><p>Mô Tả</p></b>
		</div>
		<div id="mota">
			<p><?php echo $row_sql['mota'];?></p>
		</div>
	</div>
	</div>