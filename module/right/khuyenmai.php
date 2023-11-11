
    <div class="title"><h3>KHUYẾN MÃI</h3></div>
	<?php 
	if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
	}else{
		$trang=1;
	}
	$sosangpham1trang=10;
	$phantrang=($trang*$sosangpham1trang)-$sosangpham1trang;
	$sql="select*from chitietsanpham where khuyenmai > 0 limit $phantrang,$sosangpham1trang";
	$query_sql=mysqli_query($conn,$sql);
	while($row_sql=mysqli_fetch_assoc($query_sql)){
		include('module/right/sanpham.php');
	}
	//phân trang	
	$sql_phantrang="select*from chitietsanpham";
	$query_phantrang=mysqli_query($conn,$sql_phantrang);
	$row_phantrang=mysqli_num_rows($query_phantrang);
	$sotrang=ceil($row_phantrang/$sosangpham1trang);
	$tentrang="khuyenmai";
	include('module/right/phantrang.php');
	?>