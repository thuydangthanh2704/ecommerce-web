<div class="danhsach">
<ul>
	<p style="color: red; background-color: orange;"><strong>LỌC THEO GIÁ TIỀN<strong></p>
	<ul>
	<?php 
	$sql_quan="select *from price where status='1'";
	$query_quan=mysqli_query($conn,$sql_quan);
	while($row_quan=mysqli_fetch_array($query_quan)){
	?>
    
    <a href="index.php?xem=rangePrice&rp=<?php echo $row_quan['rangePrice'];?>"><li><div align="center"><strong><?php echo $row_quan['rangePrice'];?></strong></div></li></a>
   
	<?php }?>
	</ul>
	</ul>
</div>