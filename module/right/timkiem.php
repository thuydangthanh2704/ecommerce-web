<div class="title"><h3>Tìm Kiếm</h3></div>
 <?php
 if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
	}else{
		$trang=1;
	}
 if(isset($_POST['bt_timkiem'])){
	$tim=$_POST['tim'];
	$_SESSION['tim']=$tim;
 }
	$sosangpham1trang=8;
	
	$phantrang=($trang*$sosangpham1trang)-$sosangpham1trang;
	$sql="select*from chitietsanpham where ten_sanpham like '%{$_SESSION['tim']}%' limit $phantrang,$sosangpham1trang ";
	$query_sql=mysqli_query($conn,$sql);
	$num_sql=mysqli_num_rows($query_sql);
	if($num_sql>0){
	while($row_sql=mysqli_fetch_assoc($query_sql)){
		include('module/right/sanpham.php');
	}
	$sql_phantrang="select*from chitietsanpham where ten_sanpham like '%{$_SESSION['tim']}%'";
	$query_phantrang=mysqli_query($conn,$sql_phantrang);
	$row_phantrang=mysqli_num_rows($query_phantrang);
	$sotrang=ceil($row_phantrang/$sosangpham1trang);
	$tentrang="timkiem";
	include('module/right/phantrang.php');
	}else{
		echo "Không có kết quả tìm kiếm";
	}

	 ?>