<style>
	.button2{
	display: inline-block;
  border-radius: 4px;
  background-color: #666666;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 3px;
  width: 35px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 1px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #666666;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 5px;
  width: 100px;
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
	<div class="sanpham">
    <ul>
	<?php 
	?>
    <li>
    <a href="?xem=chitietsanpham&id=<?php echo $row_sql['id_sanpham'];?>"><img src="./img/<?php echo $row_sql['hinhanh_sanpham'];?>" class="img"/></a>
   <p>Tên Sản Phẩm:<br> <b><?php echo $row_sql['ten_sanpham'];?></b></p>
   <p>Khuyến mãi:<b><font color="red"><br><img src="img/khuyenmai.png" width="20" height="20"><?php echo $row_sql['khuyenmai'];?></font>%</b></p>
    <p>Giá sản phẩm:<br><font color="red" style="font-family:Impact;"><b><?php echo number_format($row_sql['gia_sanpham'],0, ',', '.');?> VNĐ </b></font></p>
    <a href="?xem=chitietsanpham&id=<?php echo $row_sql['id_sanpham'];?>"><button class="button" style="vertical-align:middle"><span>Chi Tiết</span></button><a href="?xem=giohang&id=<?php echo $row_sql['id_sanpham'];?>"><button class="button2" style="vertical-align:middle"><img src="img/giohang.png" width="20"><span> </span></button></a><br>
     </a>
     </li>
    </ul>
    </div>