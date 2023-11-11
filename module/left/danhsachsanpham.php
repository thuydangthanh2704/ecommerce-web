<div class="danhsach">
    <p> <strong>ÁO NỮ</strong></p>
    <ul>
	<?php 
	$sql_quan="select*from loaisanpham where id_loailoaisanpham='1'";
	$query_quan=mysqli_query($conn,$sql_quan);
	while($row_quan=mysqli_fetch_assoc($query_quan)){
	?>
   
      <a href="index.php?xem=chitietloaisanpham&id=<?php echo $row_quan['id_loaisanpham'];?>"> <li><div align="center"><strong><?php echo $row_quan['ten_loaisanpham'];?></strong></div> </li></a>
   
	<?php }?>
    </ul>
    <p><strong> QUẦN NỮ</strong></p>
    <ul>
	<?php 
	$sql_quan="select*from loaisanpham where id_loailoaisanpham='0'";
	$query_quan=mysqli_query($conn,$sql_quan);
	while($row_quan=mysqli_fetch_assoc($query_quan)){
	?>
    
      <a href="index.php?xem=chitietloaisanpham&id=<?php echo $row_quan['id_loaisanpham'];?>"><li><div align="center"><strong><?php echo $row_quan['ten_loaisanpham'];?></strong></div></li></a>
   
	<?php }?>
	</ul>
	<p><strong> PHỤ KIỆN</strong></p>
    <ul>
	<?php 
	$sql_quan="select*from loaisanpham where id_loailoaisanpham='2'";
	$query_quan=mysqli_query($conn,$sql_quan);
	while($row_quan=mysqli_fetch_assoc($query_quan)){
	?>
    
      <a href="index.php?xem=chitietloaisanpham&id=<?php echo $row_quan['id_loaisanpham'];?>"><li><div align="center"><strong><?php echo $row_quan['ten_loaisanpham'];?></strong></div></li></a>
   
	<?php }?>
	</ul>
</div>
    
