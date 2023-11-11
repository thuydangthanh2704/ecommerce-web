<?php
	$sql="select * from chitietsanpham where id_sanpham=$_GET[id]";
	$run=$conn->query($sql);
	$row=$run->fetch_array();
?>
<form action="modules/quanlysanpham/xuly.php?id=<?php echo $row['id_sanpham'] ?>" method="post" enctype="multipart/form-data">
	<center><table width="600px" border="1">
      <tr>
        <td colspan="2"><div align="center">Sửa sản phẩm</div></td>
      </tr>
      <tr>
        <td><div align="right">Tên sản phẩm:</div></td>
        <td><input type="text" name="ten_sanpham" id="tensp" value="<?php echo $row['ten_sanpham'] ?>" ></td>
      </tr>
      <tr>
        <td><div align="right">Hình ảnh:</div></td>
        <td><input type="file" name="hinhanh_sanpham" id="hinhanh_sanpham"><img src="img/<?php echo $row['hinhanh_sanpham'] ?>" width="60px" height="60px" /></td>
      </tr>
      <tr>
        <td><div align="right">Loại sản phẩm:</div></td>
        <td><select name="loaisanpham" id="loaisanpham">
        		<?php
                	$sql_mh="select * from loaisanpham";
					$run_mh=$conn->query($sql_mh);
					while($row_mh=$run_mh->fetch_array()){
						if($row['id_loaisanpham']==$row_mh['id_loaisanpham']){
				?>
        					<option selected value="<?php echo $row_mh['id_loaisanpham'] ?>"><?php echo $row_mh['ten_loaisanpham'] ?></option>
                <?php
						}else{
				?>
                			<option value="<?php echo $row_mh['id_loaisanpham'] ?>"><?php echo $row_mh['ten_loaisanpham'] ?></option>
                <?php
						}
					}
				?>
        	</select>
        </td>
      </tr>
      <tr>
        <td><div align="right">Khuyến mãi:</div></td>
        <td><input type="text" name="khuyenmai" id="khuyenmai" value="<?php echo $row['khuyenmai'] ?>" /></td>
      </tr>
      <tr>
        <td><div align="right">Mô tả:</div></td>
        <td><textarea name="mota" id="mota" cols="1000" rows="25" ><?php echo $row['mota'] ?></textarea></td>
      </tr>
      <tr>
        <td><div align="right">Giá thành:</div></td>
        <td><input type="text" name="gia_sanpham" id="gia" value="<?php echo $row['gia_sanpham'] ?>"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="sua" id="sua" value="Sửa">
        </div></td>
      </tr>
    </table>
</form>
<a href="adminpage.php?quanly=quanlysanpham&ac=lietke"><button style="margin-top:10px" name="nutlietke" id="nutlietke" type="button">Liệt kê</button></a></center>
