<form action="modules/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
	<center><table width="600" border="1">
     <h2>Thêm sản phẩm</h2>
      <tr>
        <td><div align="right">Tên sản phẩm:</div></td>
        <td><input type="text" name="ten_sanpham" id="ten_sanpham"></td>
      </tr>
      <tr>
        <td><div align="right">Hình ảnh:</div></td>
        <td><input type="file" name="hinhanh_sanpham" id="hinhanh_sanpham"></td>
      </tr>
      <tr>
        <td><div align="right">Loại sản phẩm:</div></td>
        <td><select name="loaisanpham" id="loaisanpham">
        		<?php
                	$sql="select * from loaisanpham";
					$run=$conn->query($sql);
					while($row=$run->fetch_array()){
				?>
        		<option value="<?php echo $row['id_loaisanpham'] ?>"><?php echo $row['ten_loaisanpham'] ?></option>
                <?php
					}
				?>
        	</select>
        </td>
      </tr>
      <tr>
        <td><div align="right">Khuyến mãi:</div></td>
        <td><input type="text" name="khuyenmai" id="khuyenmai" /></td>
      </tr>
      <tr>
        <td><div align="right">Mô tả:</div></td>
        <td><textarea name="mota" id="mota" cols="1000" rows="25"></textarea></td>
      </tr>
      <tr>
        <td><div align="right">Giá thành:</div></td>
        <td><input type="text" name="gia_sanpham" id="gia_sanpham"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="them" id="them" value="Thêm">
        </div></td>
      </tr>
    </table>
</form>
<a href="adminpage.php?quanly=quanlysanpham&ac=lietke"><button style="margin-top:10px" name="nutlietke" id="nutlietke" type="button">Liệt kê</button></a></center>
