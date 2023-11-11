
	<?php 
	if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
	}else{
		$trang=1;
	}
	$sosanpham1trang=6;
	$phantrang=($trang*$sosanpham1trang)-$sosanpham1trang;
	$id=$_GET['id'];
	$sql="select*from chitietsanpham where id_loaisanpham=$id limit $phantrang,$sosanpham1trang ";
	$query_sql=mysqli_query($conn,$sql);
	while($row_sql=mysqli_fetch_assoc($query_sql)){
		include('module/right/sanpham.php');
	}
	//phân trang	
	$sql_phantrang="select*from chitietsanpham where id_loaisanpham=$id";
	$query_phantrang=mysqli_query($conn,$sql_phantrang);
	$row_phantrang=mysqli_num_rows($query_phantrang);
	$sotrang=ceil($row_phantrang/$sosanpham1trang);
	$tentrang="chitietloaisanpham&id={$id}";
	include('module/right/phantrang.php');
	?>