<?php
	if(isset($_POST['search'])){
		$search=$_POST['inputsearch'];
		$sql="select * from chitietsanpham, loaisanpham where chitietsanpham.ten_sanpham LIKE '%$search%' and loaisanpham.id_loaisanpham=chitietsanpham.id_loaisanpham order by chitietsanpham.id_sanpham asc";
		$run=$conn->query($sql);
		$count=$run->num_rows;
		if($count>0){
?>
		<center><table width="800px%" border="2">
		  <tr>
			<td><div align="center">ID</div></td>
			<td><div align="center">Tên sản phẩm</div></td>
			<td><div align="center">Hình ảnh</div></td>
			<td><div align="center">Loại sản phẩm</div></td>
			<td><div align="center">Khuyến mãi</div></td>
			<td><div align="center">Mô tả</div></td>
			<td><div align="center">Giá thành</div></td>
			<td colspan="2"><div align="center">Quản lý</div></td>
		  </tr>
		  <?php
			$i=0;
			while($row=$run->fetch_array()){
		  ?>
		  <tr>
			<td><?php echo $row['id_sanpham'] ?></td>
			<td><?php echo $row['ten_sanpham'] ?></td>
			<td><img src="img/<?php echo $row['hinhanh_sanpham'] ?>" width="60px" height="60px" /></td>
			<td><?php echo $row['ten_loaisanpham'] ?></td>
			<td><?php echo $row['khuyenmai'] ?></td>
			<td><?php echo $row['mota'] ?></td>
			<td><?php echo $row['gia_sanpham'] ?></td>
			<td><div align="center"><a href="adminpage.php?quanly=quanlysanpham&ac=sua&id=<?php echo $row['id_sanpham'] ?>">Sửa</a></div></td>
			<td><div align="center"><a href="modules/quanlysanpham/xuly.php?id=<?php echo $row['id_sanpham'] ?>">Xóa</a></div></td>
		</tr>
		  <?php
			$i++;
			}
		  ?>
		</table></center>
		<?php
			}else{
				echo 'Không tìm thấy sản phẩm';
			}
		}
		?>
