<div class="title"><h3>ĐỘI NGŨ NHÂN VIÊN</h3></div>
	<?php 
	if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
	}else{
		$trang=1;
	}
	$sosangpham1trang=8;
	$phantrang=($trang*$sosangpham1trang)-$sosangpham1trang;
	$sql="select*from nhanvien limit $phantrang,$sosangpham1trang ";
	$query_sql=mysqli_query($conn,$sql);
	while($row_sql=mysqli_fetch_assoc($query_sql)){
		include('module/right/nhanvien.php');
	}
	//phân trang	
	$sql_phantrang="select*from nhanvien";
	$query_phantrang=mysqli_query($conn,$sql_phantrang);
	$row_phantrang=mysqli_num_rows($query_phantrang);
	$sotrang=ceil($row_phantrang/$sosangpham1trang);
	$tentrang="nhanvien";
	include('module/right/phantrang.php');
	?>