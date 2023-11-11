<?php
	$sql="select * from loaisanpham order by id_loaisanpham asc";
	$run=$conn->query($sql);
?>
<center><table width="600px" border="1">
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Tên loại sản phẩm</div></td>
    <td><div align="center">Nhóm sản phẩm</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
  <?php
  	$i=0;
	while($row=$run->fetch_array()){
  ?>
  <tr>
    <td><?php echo $row['id_loaisanpham'] ?></td>
    <td><?php echo $row['ten_loaisanpham'] ?></td>
    <td><?php echo $row['id_loailoaisanpham'] ?></td>
    <td><div align="center"><a href="adminpage.php?quanly=quanlymathang&ac=sua&id=<?php echo $row['id_loaisanpham'] ?>">Sửa</a></div></td>
    <td><div align="center"><a href="modules/quanlymathang/xuly.php?id=<?php echo $row['id_loaisanpham'] ?>">Xóa</a></div></td>
  </tr>
  <?php
  	$i++;
	}
  ?>
</table>
<a href="adminpage.php?quanly=quanlymathang&ac=them"><button style="margin-top:10px" name="nutthem" id="nut them" type="button">Thêm mới</button></a></center>
