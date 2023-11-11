<?php
	$sql="select * from loaisanpham where id_loaisanpham=$_GET[id]";
	$run=$conn->query($sql);
	$row=$run->fetch_array();
?>
<center><form action="modules/quanlymathang/xuly.php?id=<?php echo $row['id_loaisanpham'] ?>" method="post" enctype="multipart/form-data">
	<table width="600px" border="1">
      <tr>
        <td colspan="2"><div align="center">Sửa mặt hàng</div></td>
      </tr>
      <tr>
        <td><div align="right">Tên mặt hàng:</div></td>
        <td><input type="text" name="ten_loaisanpham" id="ten_loaisanpham" value="<?php echo $row['ten_loaisanpham'] ?>"></td>
      </tr>
      <tr>
        <td><div align="right">Nhóm sản phẩm:</div></td>
        <td><input type="text" name="id_loailoaisanpham" id="id_loailoaisanpham" value="<?php echo $row['id_loailoaisanpham'] ?>"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="sua" id="sua" value="Sửa">
        </div></td>
      </tr>
    </table>
</form>
<a href="adminpage.php?quanly=quanlymathang&ac=lietke"><button style="margin-top:10px" name="nutlietke" id="nutlietke" type="button">Liệt kê</button></a></center>
